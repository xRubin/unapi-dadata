<?php

namespace unapi\dadata\dto;

use unapi\interfaces\DtoInterface;

class EmailDto implements EmailInterface
{
    /** @var string */
    private $email;

    /**
     * @param string $address
     */
    public function __construct(string $address)
    {
        $this->email = $address;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getLocal(): string
    {
        $parts = explode('@', $this->getEmail(), 2);
        return @$parts[0];
    }

    /**
     * @return string
     */
    public function getDomain(): string
    {
        $parts = explode('@', $this->getEmail(), 2);
        return @$parts[1];
    }

    /**
     * @param array $data
     * @return self
     */
    public static function toDto(array $data): DtoInterface
    {
        return new EmailDto((string)$data['email']);
    }
}
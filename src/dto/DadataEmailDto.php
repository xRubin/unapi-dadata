<?php

namespace unapi\dadata\dto;

use unapi\interfaces\DtoInterface;

class DadataEmailDto implements DadataEmailInterface
{
    /** @var string Исходный email */
    private $source;
    /** @var EmailInterface Стандартизованный email */
    private $result;
    /** @var int Код проверки */
    private $qc;

    /**
     * @param string $source
     * @param EmailInterface $result
     * @param int $qc
     */
    public function __construct(string $source, EmailInterface $result, int $qc)
    {
        $this->source = $source;
        $this->result = $result;
        $this->qc = $qc;
    }

    /**
     * @return string
     */
    public function getSource(): string
    {
        return $this->source;
    }

    /**
     * @return EmailInterface
     */
    public function getResult(): EmailInterface
    {
        return $this->result;
    }

    /**
     * @return int
     */
    public function getQc(): int
    {
        return $this->qc;
    }

    /**
     * @param array $data
     * @return static
     */
    public static function toDto(array $data): DtoInterface
    {
        return new DadataEmailDto(
            (string)$data['source'],
            EmailDto::toDto(['email' => $data['email']]),
            (int)$data['qc']
        );
    }
}
<?php

namespace unapi\dadata\dto;

use unapi\interfaces\DtoInterface;
use DateTimeImmutable;

class DadataBirthDateDto implements DadataBirthDateInterface
{
    /** @var string Исходный email */
    private $source;
    /** @var DateTimeImmutable Стандартизованная дата */
    private $result;
    /** @var int Код проверки */
    private $qc;

    /**
     * @param string $source
     * @param DateTimeImmutable $result
     * @param int $qc
     */
    public function __construct(string $source, DateTimeImmutable $result, int $qc)
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
     * @return DateTimeImmutable
     */
    public function getResult(): DateTimeImmutable
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
        return new DadataBirthDateDto(
            (string)$data['source'],
            new DateTimeImmutable((string)$data['birthdate']),
            (int)$data['qc']
        );
    }
}
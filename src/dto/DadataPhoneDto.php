<?php

namespace unapi\dadata\dto;

use unapi\interfaces\DtoInterface;

class DadataPhoneDto implements DadataPhoneInterface
{
    /** @var string Исходный телефон одной строкой */
    public $source;
    /** @var PhoneInterface Стандартизованный телефон */
    public $result;
    /** @var string Регион */
    public $qc_conflict;
    /** @var int Код проверки */
    public $qc;

    /**
     * @param string $source
     * @param PhoneInterface $result
     * @param int $qc
     */
    public function __construct(string $source, PhoneInterface $result, int $qc)
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
     * @return PhoneInterface
     */
    public function getResult(): PhoneInterface
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
     * @return int
     */
    public function getQcConflict(): int
    {
        return $this->qc_conflict;
    }

    /**
     * @param int $qc_conflict
     * @return DadataPhoneDto
     */
    public function setQcConflict(int $qc_conflict): DadataPhoneDto
    {
        $this->qc_conflict = $qc_conflict;
        return $this;
    }

    /**
     * @param array $data
     * @return self
     */
    public static function toDto(array $data): DtoInterface
    {
        return (new DadataPhoneDto(
            (string)$data['source'],
            PhoneDto::toDto($data),
            (int)$data['qc']
        ))
            ->setQcConflict($data['qc_conflict']);
    }
}
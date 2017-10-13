<?php

namespace unapi\dadata\dto;

use unapi\interfaces\DtoInterface;

class DadataPassportDto implements DadataPassportInterface
{
    /** @var string Исходная серия и номер одной строкой */
    private $source;
    /** @var PassportInterface Паспорт */
    private $result;
    /** @var int Код проверки */
    private $qc;

    /**
     * @param string $source
     * @param PassportInterface $result
     * @param int $qc
     */
    public function __construct($source, PassportInterface $result, $qc)
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
     * @return PassportInterface
     */
    public function getResult(): PassportInterface
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
        return new DadataPassportDto(
            (string)$data['source'],
            PassportDto::toDto([
                'series' => $data['series'],
                'number' => $data['number']
            ]),
            (int)$data['qc']
        );
    }
}
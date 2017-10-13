<?php

namespace unapi\dadata\dto;

use unapi\interfaces\DtoInterface;

class DadataVehicleDto implements DadataVehicleInterface
{
    /** @var string Исходный email */
    private $source;
    /** @var VehicleInterface Стандартизованное значение */
    private $result;
    /** @var int Код проверки */
    private $qc;

    /**
     * @param string $source
     * @param VehicleInterface $result
     * @param int $qc
     */
    public function __construct(string $source, VehicleInterface $result, int $qc)
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
     * @return VehicleInterface
     */
    public function getResult(): VehicleInterface
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
        return new DadataVehicleDto(
            (string)$data['source'],
            VehicleDto::toDto([
                'brand' => (string)$data['brand'],
                'model' => (string)$data['model']
            ]),
            (int)$data['qc']
        );
    }
}
<?php

namespace unapi\dadata\dto;

use unapi\interfaces\DtoInterface;

class VehicleDto implements VehicleInterface
{
    /** @var string Vfhrf */
    private $brand;
    /** @var string Модель */
    private $model;

    /**
     * @param string $brand
     * @param string $model
     */
    public function __construct(string $brand, string $model)
    {
        $this->brand = $brand;
        $this->model = $model;
    }

    /**
     * @return string
     */
    public function getBrand(): string
    {
        return $this->brand;
    }

    /**
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * @return string
     */
    public function getResult(): string
    {
        return sprintf('%s %s', $this->getBrand(), $this->getModel());
    }

    /**
     * @param array $data
     * @return self
     */
    public static function toDto(array $data): DtoInterface
    {
        return new VehicleDto(
            (string)$data['brand'],
            (string)$data['model']
        );
    }
}
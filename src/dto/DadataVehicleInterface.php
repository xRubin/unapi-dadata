<?php

namespace unapi\dadata\dto;

use unapi\interfaces\DtoInterface;

interface DadataVehicleInterface extends DtoInterface
{
    /**
     * @return string
     */
    public function getSource(): string ;

    /**
     * @return VehicleInterface
     */
    public function getResult(): VehicleInterface;

    /**
     * @return int
     */
    public function getQc(): int;
}
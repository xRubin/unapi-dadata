<?php

namespace unapi\dadata\dto;

use unapi\interfaces\DtoInterface;

interface VehicleInterface extends DtoInterface
{
    /**
     * @return string
     */
    public function getBrand(): string;

    /**
     * @return string
     */
    public function getModel(): string;

    /**
     * @return string
     */
    public function getResult(): string;
}
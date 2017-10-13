<?php

namespace unapi\dadata\dto;

use unapi\interfaces\DtoInterface;

interface MetroStationInterface extends DtoInterface
{
    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return string
     */
    public function getLine(): string;
}
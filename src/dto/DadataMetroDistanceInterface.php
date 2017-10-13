<?php

namespace unapi\dadata\dto;

use unapi\interfaces\DtoInterface;

interface DadataMetroDistanceInterface extends DtoInterface
{
    /**
     * @return float
     */
    public function getDistance(): float;

    /**
     * @return MetroStationInterface
     */
    public function getStation(): MetroStationInterface;
}

<?php

namespace unapi\dadata\dto;

use unapi\interfaces\DtoInterface;

class DadataMetroDistanceDto implements DadataMetroDistanceInterface
{
    /** @var float */
    private $distance;
    /** @var MetroStationInterface */
    private $station;

    /**
     * @param MetroStationInterface $station
     * @param float $distance
     */
    public function __construct(MetroStationInterface $station, float $distance)
    {
        $this->station = $station;
        $this->distance = $distance;
    }

    /**
     * @return float
     */
    public function getDistance(): float
    {
        return $this->distance;
    }

    /**
     * @return MetroStationInterface
     */
    public function getStation(): MetroStationInterface
    {
        return $this->station;
    }

    /**
     * @param array $data
     * @return self
     */
    public static function toDto(array $data): DtoInterface
    {
        return new DadataMetroDistanceDto(
            MetroStationDto::toDto([
                'line' => (string)$data['line'],
                'name' => (string)$data['name'],
            ]),
            (float)$data['distance']
        );
    }
}

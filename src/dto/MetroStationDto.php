<?php

namespace unapi\dadata\dto;

use unapi\interfaces\DtoInterface;

class MetroStationDto implements MetroStationInterface
{
    /** @var string */
    private $name;
    /** @var string */
    private $line;

    /**
     * MetroStationDto constructor.
     * @param string $name
     * @param string $line
     */
    public function __construct($name, $line)
    {
        $this->name = $name;
        $this->line = $line;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getLine(): string
    {
        return $this->line;
    }

    /**
     * @param array $data
     * @return static
     */
    public static function toDto(array $data): DtoInterface
    {
        return new MetroStationDto(
            (string)$data['name'],
            (string)$data['line']
        );
    }
}
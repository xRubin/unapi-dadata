<?php

namespace unapi\dadata\dto;

use unapi\interfaces\DtoInterface;

class DadataAddressDto implements DadataAddressInterface
{
    /** @var string Исходный адрес одной строкой */
    private $source;
    /** @var AddressInterface Стандартизованный адрес одной строкой */
    private $result;
    /** @var int Код точности координат */
    private $qc_geo;
    /** @var int Код пригодности к рассылке */
    private $qc_complete;
    /** @var int Признак наличия дома в ФИАС */
    private $qc_house;
    /** @var int Код проверки адреса */
    private $qc;
    /** @var string Нераспознанная часть адреса */
    private $unparsed_parts;
    /** @var DadataMetroDistanceInterface[] Список ближайших станций метро (до трёх штук) */
    private $metro = [];

    /**
     * @param string $source
     * @param AddressInterface $result
     * @param int $qc
     */
    public function __construct($source, AddressInterface $result, $qc)
    {
        $this->source = $source;
        $this->result = $result;
        $this->qc = $qc;
    }

    /**
     * @param array $data
     * @return self
     */
    public static function toDto(array $data): DtoInterface
    {
        return (new DadataAddressDto(
            (string)$data['source'],
            AddressDto::toDto($data),
            (int)$data['qc']
        ))
            ->setQcGeo($data['qc_geo'])
            ->setQcComplete($data['qc_complete'])
            ->setQcHouse($data['qc_house'])
            ->setUnparsedParts($data['unparsed_parts'])
            ->setMetro((array)array_map(function ($distance) {
                return DadataMetroDistanceDto::toDto($distance);
            }, $data['metro']));
    }

    /**
     * @return string
     */
    public function getSource(): string
    {
        return $this->source;
    }

    /**
     * @return AddressInterface
     */
    public function getResult(): AddressInterface
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
    public function getQcGeo(): int
    {
        return $this->qc_geo;
    }

    /**
     * @param int $qc_geo
     * @return DadataAddressDto
     */
    public function setQcGeo(int $qc_geo): DadataAddressDto
    {
        $this->qc_geo = $qc_geo;
        return $this;
    }

    /**
     * @return int
     */
    public function getQcComplete(): int
    {
        return $this->qc_complete;
    }

    /**
     * @param int $qc_complete
     * @return DadataAddressDto
     */
    public function setQcComplete(int $qc_complete): DadataAddressDto
    {
        $this->qc_complete = $qc_complete;
        return $this;
    }

    /**
     * @return int
     */
    public function getQcHouse(): int
    {
        return $this->qc_house;
    }

    /**
     * @param int $qc_house
     * @return DadataAddressDto
     */
    public function setQcHouse(int $qc_house): DadataAddressDto
    {
        $this->qc_house = $qc_house;
        return $this;
    }

    /**
     * @return string
     */
    public function getUnparsedParts(): ?string
    {
        return $this->unparsed_parts;
    }

    /**
     * @param string $unparsed_parts
     * @return DadataAddressDto
     */
    public function setUnparsedParts(?string $unparsed_parts): DadataAddressDto
    {
        $this->unparsed_parts = $unparsed_parts;
        return $this;
    }

    /**
     * @return DadataMetroDistanceInterface[]
     */
    public function getMetro(): array
    {
        return $this->metro;
    }

    /**
     * @param DadataMetroDistanceInterface[] $metro
     * @return DadataAddressDto
     */
    public function setMetro(array $metro): DadataAddressDto
    {
        $this->metro = $metro;
        return $this;
    }
}
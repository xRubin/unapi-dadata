<?php

namespace unapi\dadata\dto;

use unapi\interfaces\DtoInterface;

interface AddressInterface extends DtoInterface
{
    /**
     * @return string
     */
    public function getPostalCode(): ?string;

    /**
     * @return string
     */
    public function getCountry(): ?string;

    /**
     * @return string
     */
    public function getRegionFiasId(): ?string;

    /**
     * @return string
     */
    public function getRegionKladrId(): ?string;

    /**
     * @return string
     */
    public function getRegionWithType(): ?string;

    /**
     * @return string
     */
    public function getRegionType(): ?string;

    /**
     * @return string
     */
    public function getRegionTypeFull(): ?string;

    /**
     * @return string
     */
    public function getRegion(): ?string;
    /**
     * @return string
     */
    public function getAreaFiasId(): ?string;

    /**
     * @return string
     */
    public function getAreaKladrId(): ?string;

    /**
     * @return string
     */
    public function getAreaWithType(): ?string;

    /**
     * @return string
     */
    public function getAreaType(): ?string;

    /**
     * @return string
     */
    public function getAreaTypeFull(): ?string;

    /**
     * @return string
     */
    public function getArea(): ?string;

    /**
     * @return string
     */
    public function getCityFiasId(): ?string;

    /**
     * @return string
     */
    public function getCityKladrId(): ?string;

    /**
     * @return string
     */
    public function getCityWithType(): ?string;

    /**
     * @return string
     */
    public function getCityType(): ?string;

    /**
     * @return string
     */
    public function getCityTypeFull(): ?string;

    /**
     * @return string
     */
    public function getCity(): ?string;

    /**
     * @return string
     */
    public function getCityArea(): ?string;

    /**
     * @return string
     */
    public function getCityDistrictFiasId(): ?string;

    /**
     * @return string
     */
    public function getCityDistrictKladrId(): ?string;

    /**
     * @return string
     */
    public function getCityDistrictWithType(): ?string;

    /**
     * @return string
     */
    public function getCityDistrictType(): ?string;

    /**
     * @return string
     */
    public function getCityDistrictTypeFull(): ?string;

    /**
     * @return string
     */
    public function getCityDistrict(): ?string;

    /**
     * @return string
     */
    public function getSettlementFiasId(): ?string;

    /**
     * @return string
     */
    public function getSettlementKladrId(): ?string;

    /**
     * @return string
     */
    public function getSettlementWithType(): ?string;

    /**
     * @return string
     */
    public function getSettlementType(): ?string;

    /**
     * @return string
     */
    public function getSettlementTypeFull(): ?string;

    /**
     * @return string
     */
    public function getSettlement(): ?string;

    /**
     * @return string
     */
    public function getStreetFiasId(): ?string;

    /**
     * @return string
     */
    public function getStreetKladrId(): ?string;

    /**
     * @return string
     */
    public function getStreetWithType(): ?string;

    /**
     * @return string
     */
    public function getStreetType(): ?string;

    /**
     * @return string
     */
    public function getStreetTypeFull(): ?string;

    /**
     * @return string
     */
    public function getStreet(): ?string;

    /**
     * @return string
     */
    public function getHouseFiasId(): ?string;

    /**
     * @return string
     */
    public function getHouseKladrId(): ?string;

    /**
     * @return string
     */
    public function getHouseType(): ?string;

    /**
     * @return string
     */
    public function getHouseTypeFull(): ?string;

    /**
     * @return string
     */
    public function getHouse(): ?string;

    /**
     * @return string
     */
    public function getBlockType(): ?string;

    /**
     * @return string
     */
    public function getBlockTypeFull(): ?string;

    /**
     * @return string
     */
    public function getBlock(): ?string;

    /**
     * @return string
     */
    public function getFlatType(): ?string;

    /**
     * @return string
     */
    public function getFlatTypeFull(): ?string;

    /**
     * @return string
     */
    public function getFlat(): ?string;

    /**
     * @return float
     */
    public function getFlatArea(): ?float;

    /**
     * @return float
     */
    public function getSquareMeterPrice(): ?float;

    /**
     * @return float
     */
    public function getFlatPrice(): ?float;

    /**
     * @return string
     */
    public function getPostalBox(): ?string;

    /**
     * @return string
     */
    public function getFiasId(): ?string;

    /**
     * @return int
     */
    public function getFiasLevel(): int;

    /**
     * @return string
     */
    public function getKladrId(): ?string;

    /**
     * @return string
     */
    public function getCapitalMarker(): ?string;

    /**
     * @return string
     */
    public function getOkato(): ?string;

    /**
     * @return string
     */
    public function getOktmo(): ?string;

    /**
     * @return string
     */
    public function getTaxOffice(): ?string;

    /**
     * @return string
     */
    public function getTaxOfficeLegal(): ?string;

    /**
     * @return string
     */
    public function getTimezone(): ?string;

    /**
     * @return float
     */
    public function getGeoLat(): ?float;

    /**
     * @return float
     */
    public function getGeoLon(): ?float;

    /**
     * @return string
     */
    public function getBeltwayHit(): ?string;

    /**
     * @return float
     */
    public function getBeltwayDistance(): ?float;
}
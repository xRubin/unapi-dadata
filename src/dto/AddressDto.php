<?php

namespace unapi\dadata\dto;

use unapi\interfaces\DtoInterface;

class AddressDto implements AddressInterface
{
    /** @var string Индекс */
    private $postal_code;
    /** @var string Страна */
    private $country;
    /** @var string Код ФИАС региона */
    private $region_fias_id;
    /** @var string Код КЛАДР региона */
    private $region_kladr_id;
    /** @var string Регион с типом */
    private $region_with_type;
    /** @var string Тип региона (сокращенный) */
    private $region_type;
    /** @var string Тип региона */
    private $region_type_full;
    /** @var string Регион */
    private $region;
    /** @var string Код ФИАС района в регионе */
    private $area_fias_id;
    /** @var string Код КЛАДР района в регионе */
    private $area_kladr_id;
    /** @var string Район в регионе с типом */
    private $area_with_type;
    /** @var string Тип района в регионе (сокращенный) */
    private $area_type;
    /** @var string Тип района в регионе */
    private $area_type_full;
    /** @var string Район в регионе */
    private $area;
    /** @var string Код ФИАС города */
    private $city_fias_id;
    /** @var string Код КЛАДР города */
    private $city_kladr_id;
    /** @var string Город с типом */
    private $city_with_type;
    /** @var string Тип города (сокращенный) */
    private $city_type;
    /** @var string Тип города */
    private $city_type_full;
    /** @var string Город */
    private $city;
    /** @var string Административный округ (только для Москвы) */
    private $city_area;
    /** @var string Код ФИАС района города (заполняется, только если район есть в ФИАС) */
    private $city_district_fias_id;
    /** @var string Код КЛАДР района города (не заполняется) */
    private $city_district_kladr_id;
    /** @var string Район города с типом */
    private $city_district_with_type;
    /** @var string Тип района города (сокращенный) */
    private $city_district_type;
    /** @var string Тип района города */
    private $city_district_type_full;
    /** @var string Район города */
    private $city_district;
    /** @var string Код ФИАС нас. пункта */
    private $settlement_fias_id;
    /** @var string Код КЛАДР нас. пункта */
    private $settlement_kladr_id;
    /** @var string Населенный пункт с типом */
    private $settlement_with_type;
    /** @var string Тип населенного пункта (сокращенный) */
    private $settlement_type;
    /** @var string Тип населенного пункта */
    private $settlement_type_full;
    /** @var string Населенный пункт */
    private $settlement;
    /** @var string Код ФИАС улицы */
    private $street_fias_id;
    /** @var string Код КЛАДР улицы */
    private $street_kladr_id;
    /** @var string Улица с типом */
    private $street_with_type;
    /** @var string Тип улицы (сокращенный) */
    private $street_type;
    /** @var string Тип улицы */
    private $street_type_full;
    /** @var string Улица */
    private $street;
    /** @var string Код ФИАС дома */
    private $house_fias_id;
    /** @var string Код КЛАДР дома */
    private $house_kladr_id;
    /** @var string Тип дома (сокращенный) */
    private $house_type;
    /** @var string Тип дома */
    private $house_type_full;
    /** @var string Дом */
    private $house;
    /** @var string Тип корпуса/строения (сокращенный) */
    private $block_type;
    /** @var string Тип корпуса/строения */
    private $block_type_full;
    /** @var string Корпус/строение */
    private $block;
    /** @var string Тип квартиры (сокращенный) */
    private $flat_type;
    /** @var string Тип квартиры */
    private $flat_type_full;
    /** @var string Квартира */
    private $flat;
    /** @var float Площадь квартиры */
    private $flat_area;
    /** @var float Рыночная стоимость м² */
    private $square_meter_price;
    /** @var float Рыночная стоимость квартиры */
    private $flat_price;
    /** @var string Абонентский ящик */
    private $postal_box;
    /** @var string Код ФИАС */
    private $fias_id;
    /** @var int Уровень детализации, до которого адрес найден в ФИАС */
    private $fias_level;
    /** @var string Код КЛАДР */
    private $kladr_id;
    /** @var string Признак центра района или региона */
    private $capital_marker;
    /** @var string Код ОКАТО */
    private $okato;
    /** @var string Код ОКТМО */
    private $oktmo;
    /** @var string Код ИФНС для физических лиц */
    private $tax_office;
    /** @var string Код ИФНС для организаций (не заполняется) */
    private $tax_office_legal;
    /** @var string Часовой пояс */
    private $timezone;
    /** @var float Координаты: широта */
    private $geo_lat;
    /** @var float Координаты: долгота */
    private $geo_lon;
    /** @var string Внутри кольцевой? */
    private $beltway_hit;
    /** @var float Расстояние от кольцевой в км */
    private $beltway_distance;

    /**
     * @return string
     */
    public function getPostalCode(): ?string
    {
        return $this->postal_code;
    }

    /**
     * @param string $postal_code
     * @return AddressDto
     */
    public function setPostalCode(?string $postal_code): AddressDto
    {
        $this->postal_code = $postal_code;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * @param string $country
     * @return AddressDto
     */
    public function setCountry(?string $country): AddressDto
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return string
     */
    public function getRegionFiasId(): ?string
    {
        return $this->region_fias_id;
    }

    /**
     * @param string $region_fias_id
     * @return AddressDto
     */
    public function setRegionFiasId(?string $region_fias_id): AddressDto
    {
        $this->region_fias_id = $region_fias_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getRegionKladrId(): ?string
    {
        return $this->region_kladr_id;
    }

    /**
     * @param string $region_kladr_id
     * @return AddressDto
     */
    public function setRegionKladrId(?string $region_kladr_id): AddressDto
    {
        $this->region_kladr_id = $region_kladr_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getRegionWithType(): ?string
    {
        return $this->region_with_type;
    }

    /**
     * @param string $region_with_type
     * @return AddressDto
     */
    public function setRegionWithType(?string $region_with_type): AddressDto
    {
        $this->region_with_type = $region_with_type;
        return $this;
    }

    /**
     * @return string
     */
    public function getRegionType(): ?string
    {
        return $this->region_type;
    }

    /**
     * @param string $region_type
     * @return AddressDto
     */
    public function setRegionType(?string $region_type): AddressDto
    {
        $this->region_type = $region_type;
        return $this;
    }

    /**
     * @return string
     */
    public function getRegionTypeFull(): ?string
    {
        return $this->region_type_full;
    }

    /**
     * @param string $region_type_full
     * @return AddressDto
     */
    public function setRegionTypeFull(?string $region_type_full): AddressDto
    {
        $this->region_type_full = $region_type_full;
        return $this;
    }

    /**
     * @return string
     */
    public function getRegion(): ?string
    {
        return $this->region;
    }

    /**
     * @param string $region
     * @return AddressDto
     */
    public function setRegion(?string $region): AddressDto
    {
        $this->region = $region;
        return $this;
    }

    /**
     * @return string
     */
    public function getAreaFiasId(): ?string
    {
        return $this->area_fias_id;
    }

    /**
     * @param string $area_fias_id
     * @return AddressDto
     */
    public function setAreaFiasId(?string $area_fias_id): AddressDto
    {
        $this->area_fias_id = $area_fias_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getAreaKladrId(): ?string
    {
        return $this->area_kladr_id;
    }

    /**
     * @param string $area_kladr_id
     * @return AddressDto
     */
    public function setAreaKladrId(?string $area_kladr_id): AddressDto
    {
        $this->area_kladr_id = $area_kladr_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getAreaWithType(): ?string
    {
        return $this->area_with_type;
    }

    /**
     * @param string $area_with_type
     * @return AddressDto
     */
    public function setAreaWithType(?string $area_with_type): AddressDto
    {
        $this->area_with_type = $area_with_type;
        return $this;
    }

    /**
     * @return string
     */
    public function getAreaType(): ?string
    {
        return $this->area_type;
    }

    /**
     * @param string $area_type
     * @return AddressDto
     */
    public function setAreaType(?string $area_type): AddressDto
    {
        $this->area_type = $area_type;
        return $this;
    }

    /**
     * @return string
     */
    public function getAreaTypeFull(): ?string
    {
        return $this->area_type_full;
    }

    /**
     * @param string $area_type_full
     * @return AddressDto
     */
    public function setAreaTypeFull(?string $area_type_full): AddressDto
    {
        $this->area_type_full = $area_type_full;
        return $this;
    }

    /**
     * @return string
     */
    public function getArea(): ?string
    {
        return $this->area;
    }

    /**
     * @param string $area
     * @return AddressDto
     */
    public function setArea(?string $area): AddressDto
    {
        $this->area = $area;
        return $this;
    }

    /**
     * @return string
     */
    public function getCityFiasId(): ?string
    {
        return $this->city_fias_id;
    }

    /**
     * @param string $city_fias_id
     * @return AddressDto
     */
    public function setCityFiasId(?string $city_fias_id): AddressDto
    {
        $this->city_fias_id = $city_fias_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getCityKladrId(): ?string
    {
        return $this->city_kladr_id;
    }

    /**
     * @param string $city_kladr_id
     * @return AddressDto
     */
    public function setCityKladrId(?string $city_kladr_id): AddressDto
    {
        $this->city_kladr_id = $city_kladr_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getCityWithType(): ?string
    {
        return $this->city_with_type;
    }

    /**
     * @param string $city_with_type
     * @return AddressDto
     */
    public function setCityWithType(?string $city_with_type): AddressDto
    {
        $this->city_with_type = $city_with_type;
        return $this;
    }

    /**
     * @return string
     */
    public function getCityType(): ?string
    {
        return $this->city_type;
    }

    /**
     * @param string $city_type
     * @return AddressDto
     */
    public function setCityType(?string $city_type): AddressDto
    {
        $this->city_type = $city_type;
        return $this;
    }

    /**
     * @return string
     */
    public function getCityTypeFull(): ?string
    {
        return $this->city_type_full;
    }

    /**
     * @param string $city_type_full
     * @return AddressDto
     */
    public function setCityTypeFull(?string $city_type_full): AddressDto
    {
        $this->city_type_full = $city_type_full;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return AddressDto
     */
    public function setCity(?string $city): AddressDto
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getCityArea(): ?string
    {
        return $this->city_area;
    }

    /**
     * @param string $city_area
     * @return AddressDto
     */
    public function setCityArea(?string $city_area): AddressDto
    {
        $this->city_area = $city_area;
        return $this;
    }

    /**
     * @return string
     */
    public function getCityDistrictFiasId(): ?string
    {
        return $this->city_district_fias_id;
    }

    /**
     * @param string $city_district_fias_id
     * @return AddressDto
     */
    public function setCityDistrictFiasId(?string $city_district_fias_id): AddressDto
    {
        $this->city_district_fias_id = $city_district_fias_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getCityDistrictKladrId(): ?string
    {
        return $this->city_district_kladr_id;
    }

    /**
     * @param string $city_district_kladr_id
     * @return AddressDto
     */
    public function setCityDistrictKladrId(?string $city_district_kladr_id): AddressDto
    {
        $this->city_district_kladr_id = $city_district_kladr_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getCityDistrictWithType(): ?string
    {
        return $this->city_district_with_type;
    }

    /**
     * @param string $city_district_with_type
     * @return AddressDto
     */
    public function setCityDistrictWithType(?string $city_district_with_type): AddressDto
    {
        $this->city_district_with_type = $city_district_with_type;
        return $this;
    }

    /**
     * @return string
     */
    public function getCityDistrictType(): ?string
    {
        return $this->city_district_type;
    }

    /**
     * @param string $city_district_type
     * @return AddressDto
     */
    public function setCityDistrictType(?string $city_district_type): AddressDto
    {
        $this->city_district_type = $city_district_type;
        return $this;
    }

    /**
     * @return string
     */
    public function getCityDistrictTypeFull(): ?string
    {
        return $this->city_district_type_full;
    }

    /**
     * @param string $city_district_type_full
     * @return AddressDto
     */
    public function setCityDistrictTypeFull(?string $city_district_type_full): AddressDto
    {
        $this->city_district_type_full = $city_district_type_full;
        return $this;
    }

    /**
     * @return string
     */
    public function getCityDistrict(): ?string
    {
        return $this->city_district;
    }

    /**
     * @param string $city_district
     * @return AddressDto
     */
    public function setCityDistrict(?string $city_district): AddressDto
    {
        $this->city_district = $city_district;
        return $this;
    }

    /**
     * @return string
     */
    public function getSettlementFiasId(): ?string
    {
        return $this->settlement_fias_id;
    }

    /**
     * @param string $settlement_fias_id
     * @return AddressDto
     */
    public function setSettlementFiasId(?string $settlement_fias_id): AddressDto
    {
        $this->settlement_fias_id = $settlement_fias_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getSettlementKladrId(): ?string
    {
        return $this->settlement_kladr_id;
    }

    /**
     * @param string $settlement_kladr_id
     * @return AddressDto
     */
    public function setSettlementKladrId(?string $settlement_kladr_id): AddressDto
    {
        $this->settlement_kladr_id = $settlement_kladr_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getSettlementWithType(): ?string
    {
        return $this->settlement_with_type;
    }

    /**
     * @param string $settlement_with_type
     * @return AddressDto
     */
    public function setSettlementWithType(?string $settlement_with_type): AddressDto
    {
        $this->settlement_with_type = $settlement_with_type;
        return $this;
    }

    /**
     * @return string
     */
    public function getSettlementType(): ?string
    {
        return $this->settlement_type;
    }

    /**
     * @param string $settlement_type
     * @return AddressDto
     */
    public function setSettlementType(?string $settlement_type): AddressDto
    {
        $this->settlement_type = $settlement_type;
        return $this;
    }

    /**
     * @return string
     */
    public function getSettlementTypeFull(): ?string
    {
        return $this->settlement_type_full;
    }

    /**
     * @param string $settlement_type_full
     * @return AddressDto
     */
    public function setSettlementTypeFull(?string $settlement_type_full): AddressDto
    {
        $this->settlement_type_full = $settlement_type_full;
        return $this;
    }

    /**
     * @return string
     */
    public function getSettlement(): ?string
    {
        return $this->settlement;
    }

    /**
     * @param string $settlement
     * @return AddressDto
     */
    public function setSettlement(?string $settlement): AddressDto
    {
        $this->settlement = $settlement;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreetFiasId(): ?string
    {
        return $this->street_fias_id;
    }

    /**
     * @param string $street_fias_id
     * @return AddressDto
     */
    public function setStreetFiasId(?string $street_fias_id): AddressDto
    {
        $this->street_fias_id = $street_fias_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreetKladrId(): ?string
    {
        return $this->street_kladr_id;
    }

    /**
     * @param string $street_kladr_id
     * @return AddressDto
     */
    public function setStreetKladrId(?string $street_kladr_id): AddressDto
    {
        $this->street_kladr_id = $street_kladr_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreetWithType(): ?string
    {
        return $this->street_with_type;
    }

    /**
     * @param string $street_with_type
     * @return AddressDto
     */
    public function setStreetWithType(?string $street_with_type): AddressDto
    {
        $this->street_with_type = $street_with_type;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreetType(): ?string
    {
        return $this->street_type;
    }

    /**
     * @param string $street_type
     * @return AddressDto
     */
    public function setStreetType(?string $street_type): AddressDto
    {
        $this->street_type = $street_type;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreetTypeFull(): ?string
    {
        return $this->street_type_full;
    }

    /**
     * @param string $street_type_full
     * @return AddressDto
     */
    public function setStreetTypeFull(?string $street_type_full): AddressDto
    {
        $this->street_type_full = $street_type_full;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreet(): ?string
    {
        return $this->street;
    }

    /**
     * @param string $street
     * @return AddressDto
     */
    public function setStreet(?string $street): AddressDto
    {
        $this->street = $street;
        return $this;
    }

    /**
     * @return string
     */
    public function getHouseFiasId(): ?string
    {
        return $this->house_fias_id;
    }

    /**
     * @param string $house_fias_id
     * @return AddressDto
     */
    public function setHouseFiasId(?string $house_fias_id): AddressDto
    {
        $this->house_fias_id = $house_fias_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getHouseKladrId(): ?string
    {
        return $this->house_kladr_id;
    }

    /**
     * @param string $house_kladr_id
     * @return AddressDto
     */
    public function setHouseKladrId(?string $house_kladr_id): AddressDto
    {
        $this->house_kladr_id = $house_kladr_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getHouseType(): ?string
    {
        return $this->house_type;
    }

    /**
     * @param string $house_type
     * @return AddressDto
     */
    public function setHouseType(?string $house_type): AddressDto
    {
        $this->house_type = $house_type;
        return $this;
    }

    /**
     * @return string
     */
    public function getHouseTypeFull(): ?string
    {
        return $this->house_type_full;
    }

    /**
     * @param string $house_type_full
     * @return AddressDto
     */
    public function setHouseTypeFull(?string $house_type_full): AddressDto
    {
        $this->house_type_full = $house_type_full;
        return $this;
    }

    /**
     * @return string
     */
    public function getHouse(): ?string
    {
        return $this->house;
    }

    /**
     * @param string $house
     * @return AddressDto
     */
    public function setHouse(?string $house): AddressDto
    {
        $this->house = $house;
        return $this;
    }

    /**
     * @return string
     */
    public function getBlockType(): ?string
    {
        return $this->block_type;
    }

    /**
     * @param string $block_type
     * @return AddressDto
     */
    public function setBlockType(?string $block_type): AddressDto
    {
        $this->block_type = $block_type;
        return $this;
    }

    /**
     * @return string
     */
    public function getBlockTypeFull(): ?string
    {
        return $this->block_type_full;
    }

    /**
     * @param string $block_type_full
     * @return AddressDto
     */
    public function setBlockTypeFull(?string $block_type_full): AddressDto
    {
        $this->block_type_full = $block_type_full;
        return $this;
    }

    /**
     * @return string
     */
    public function getBlock(): ?string
    {
        return $this->block;
    }

    /**
     * @param string $block
     * @return AddressDto
     */
    public function setBlock(?string $block): AddressDto
    {
        $this->block = $block;
        return $this;
    }

    /**
     * @return string
     */
    public function getFlatType(): ?string
    {
        return $this->flat_type;
    }

    /**
     * @param string $flat_type
     * @return AddressDto
     */
    public function setFlatType(?string $flat_type): AddressDto
    {
        $this->flat_type = $flat_type;
        return $this;
    }

    /**
     * @return string
     */
    public function getFlatTypeFull(): ?string
    {
        return $this->flat_type_full;
    }

    /**
     * @param string $flat_type_full
     * @return AddressDto
     */
    public function setFlatTypeFull(?string $flat_type_full): AddressDto
    {
        $this->flat_type_full = $flat_type_full;
        return $this;
    }

    /**
     * @return string
     */
    public function getFlat(): ?string
    {
        return $this->flat;
    }

    /**
     * @param string $flat
     * @return AddressDto
     */
    public function setFlat(?string $flat): AddressDto
    {
        $this->flat = $flat;
        return $this;
    }

    /**
     * @return float
     */
    public function getFlatArea(): ?float
    {
        return $this->flat_area;
    }

    /**
     * @param float $flat_area
     * @return AddressDto
     */
    public function setFlatArea(?float $flat_area): AddressDto
    {
        $this->flat_area = $flat_area;
        return $this;
    }

    /**
     * @return float
     */
    public function getSquareMeterPrice(): ?float
    {
        return $this->square_meter_price;
    }

    /**
     * @param float $square_meter_price
     * @return AddressDto
     */
    public function setSquareMeterPrice(?float $square_meter_price): AddressDto
    {
        $this->square_meter_price = $square_meter_price;
        return $this;
    }

    /**
     * @return float
     */
    public function getFlatPrice(): ?float
    {
        return $this->flat_price;
    }

    /**
     * @param float $flat_price
     * @return AddressDto
     */
    public function setFlatPrice(?float $flat_price): AddressDto
    {
        $this->flat_price = $flat_price;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostalBox(): ?string
    {
        return $this->postal_box;
    }

    /**
     * @param string $postal_box
     * @return AddressDto
     */
    public function setPostalBox(?string $postal_box): AddressDto
    {
        $this->postal_box = $postal_box;
        return $this;
    }

    /**
     * @return string
     */
    public function getFiasId(): ?string
    {
        return $this->fias_id;
    }

    /**
     * @param string $fias_id
     * @return AddressDto
     */
    public function setFiasId(?string $fias_id): AddressDto
    {
        $this->fias_id = $fias_id;
        return $this;
    }

    /**
     * @return int
     */
    public function getFiasLevel(): int
    {
        return $this->fias_level;
    }

    /**
     * @param int $fias_level
     * @return AddressDto
     */
    public function setFiasLevel(int $fias_level): AddressDto
    {
        $this->fias_level = $fias_level;
        return $this;
    }

    /**
     * @return string
     */
    public function getKladrId(): ?string
    {
        return $this->kladr_id;
    }

    /**
     * @param string $kladr_id
     * @return AddressDto
     */
    public function setKladrId(?string $kladr_id): AddressDto
    {
        $this->kladr_id = $kladr_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getCapitalMarker(): ?string
    {
        return $this->capital_marker;
    }

    /**
     * @param string $capital_marker
     * @return AddressDto
     */
    public function setCapitalMarker(?string $capital_marker): AddressDto
    {
        $this->capital_marker = $capital_marker;
        return $this;
    }

    /**
     * @return string
     */
    public function getOkato(): ?string
    {
        return $this->okato;
    }

    /**
     * @param string $okato
     * @return AddressDto
     */
    public function setOkato(?string $okato): AddressDto
    {
        $this->okato = $okato;
        return $this;
    }

    /**
     * @return string
     */
    public function getOktmo(): ?string
    {
        return $this->oktmo;
    }

    /**
     * @param string $oktmo
     * @return AddressDto
     */
    public function setOktmo(?string $oktmo): AddressDto
    {
        $this->oktmo = $oktmo;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaxOffice(): ?string
    {
        return $this->tax_office;
    }

    /**
     * @param string $tax_office
     * @return AddressDto
     */
    public function setTaxOffice(?string $tax_office): AddressDto
    {
        $this->tax_office = $tax_office;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaxOfficeLegal(): ?string
    {
        return $this->tax_office_legal;
    }

    /**
     * @param string $tax_office_legal
     * @return AddressDto
     */
    public function setTaxOfficeLegal(?string $tax_office_legal): AddressDto
    {
        $this->tax_office_legal = $tax_office_legal;
        return $this;
    }

    /**
     * @return string
     */
    public function getTimezone(): ?string
    {
        return $this->timezone;
    }

    /**
     * @param string $timezone
     * @return AddressDto
     */
    public function setTimezone(?string $timezone): AddressDto
    {
        $this->timezone = $timezone;
        return $this;
    }

    /**
     * @return float
     */
    public function getGeoLat(): ?float
    {
        return $this->geo_lat;
    }

    /**
     * @param float $geo_lat
     * @return AddressDto
     */
    public function setGeoLat(?float $geo_lat): AddressDto
    {
        $this->geo_lat = $geo_lat;
        return $this;
    }

    /**
     * @return float
     */
    public function getGeoLon(): ?float
    {
        return $this->geo_lon;
    }

    /**
     * @param float $geo_lon
     * @return AddressDto
     */
    public function setGeoLon(?float $geo_lon): AddressDto
    {
        $this->geo_lon = $geo_lon;
        return $this;
    }

    /**
     * @return string
     */
    public function getBeltwayHit(): ?string
    {
        return $this->beltway_hit;
    }

    /**
     * @param string $beltway_hit
     * @return AddressDto
     */
    public function setBeltwayHit(?string $beltway_hit): AddressDto
    {
        $this->beltway_hit = $beltway_hit;
        return $this;
    }

    /**
     * @return float
     */
    public function getBeltwayDistance(): ?float
    {
        return $this->beltway_distance;
    }

    /**
     * @param float $beltway_distance
     * @return AddressDto
     */
    public function setBeltwayDistance(?float $beltway_distance): AddressDto
    {
        $this->beltway_distance = $beltway_distance;
        return $this;
    }

    /**
     * @param array $data
     * @return self
     */
    public static function toDto(array $data): DtoInterface
    {
        return (new AddressDto())
            ->setPostalCode($data['postal_code'])
            ->setCountry($data['country'])
            ->setRegionFiasId($data['region_fias_id'])
            ->setRegionKladrId($data['region_kladr_id'])
            ->setRegionWithType($data['region_with_type'])
            ->setRegionType($data['region_type'])
            ->setRegionTypeFull($data['region_type_full'])
            ->setRegion($data['region'])
            ->setAreaFiasId($data['area_fias_id'])
            ->setAreaKladrId($data['area_kladr_id'])
            ->setAreaWithType($data['area_with_type'])
            ->setAreaType($data['area_type'])
            ->setAreaTypeFull($data['area_type_full'])
            ->setArea($data['area'])
            ->setCityFiasId($data['city_fias_id'])
            ->setCityKladrId($data['city_kladr_id'])
            ->setCityWithType($data['city_with_type'])
            ->setCityType($data['city_type'])
            ->setCityTypeFull($data['city_type_full'])
            ->setCity($data['city'])
            ->setCityArea($data['city_area'])
            ->setCityDistrictFiasId($data['city_district_fias_id'])
            ->setCityDistrictKladrId($data['city_district_kladr_id'])
            ->setCityDistrictWithType($data['city_district_with_type'])
            ->setCityDistrictType($data['city_district_type'])
            ->setCityDistrictTypeFull($data['city_district_type_full'])
            ->setCityDistrict($data['city_district'])
            ->setSettlementFiasId($data['settlement_fias_id'])
            ->setSettlementKladrId($data['settlement_kladr_id'])
            ->setSettlementWithType($data['settlement_with_type'])
            ->setSettlementType($data['settlement_type'])
            ->setSettlementTypeFull($data['settlement_type_full'])
            ->setSettlement($data['settlement'])
            ->setStreetFiasId($data['street_fias_id'])
            ->setStreetKladrId($data['street_kladr_id'])
            ->setStreetWithType($data['street_with_type'])
            ->setStreetType($data['street_type'])
            ->setStreetTypeFull($data['street_type_full'])
            ->setStreet($data['street'])
            ->setHouseFiasId($data['house_fias_id'])
            ->setHouseKladrId($data['house_kladr_id'])
            ->setHouseType($data['house_type'])
            ->setHouseTypeFull($data['house_type_full'])
            ->setHouse($data['house'])
            ->setBlockType($data['block_type'])
            ->setBlockTypeFull($data['block_type_full'])
            ->setBlock($data['block'])
            ->setFlatType($data['flat_type'])
            ->setFlatTypeFull($data['flat_type_full'])
            ->setFlat($data['flat'])
            ->setFlatArea($data['flat_area'])
            ->setSquareMeterPrice($data['square_meter_price'])
            ->setFlatPrice($data['flat_price'])
            ->setPostalBox($data['postal_box'])
            ->setFiasId($data['fias_id'])
            ->setFiasLevel($data['fias_level'])
            ->setKladrId($data['kladr_id'])
            ->setCapitalMarker($data['capital_marker'])
            ->setOkato($data['okato'])
            ->setOktmo($data['oktmo'])
            ->setTaxOffice($data['tax_office'])
            ->setTaxOfficeLegal($data['tax_office_legal'])
            ->setTimezone($data['timezone'])
            ->setGeoLat($data['geo_lat'])
            ->setGeoLon($data['geo_lon'])
            ->setBeltwayHit($data['beltway_hit'])
            ->setBeltwayDistance($data['beltway_distance']);
    }
}
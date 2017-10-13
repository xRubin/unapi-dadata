<?php

namespace unapi\dadata\dto;

use unapi\interfaces\DtoInterface;

class PhoneDto implements PhoneInterface
{
    /** @var string Тип телефона */
    public $type;
    /** @var string Стандартизованный телефон */
    public $phone;
    /** @var string Код страны */
    public $country_code;
    /** @var string Код города / DEF-код */
    public $city_code;
    /** @var string Локальный номер телефона */
    public $number;
    /** @var string Добавочный номер */
    public $extension;
    /** @var string Оператор связи */
    public $provider;
    /** @var string Регион */
    public $region;
    /** @var string Часовой пояс */
    public $timezone;

    /**
     * @param string $number
     */
    public function __construct(string $number)
    {
        $this->number = $number;
    }

    /**
     * @param string $prepend
     * @return string
     */
    public function getNumber(string $prepend = ''): string
    {
        return $prepend . $this->getCityCode() . $this->number;
    }

    /**
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return PhoneDto
     */
    public function setType(?string $type): PhoneDto
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     * @return PhoneDto
     */
    public function setPhone(?string $phone): PhoneDto
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountryCode(): ?string
    {
        return $this->country_code;
    }

    /**
     * @param string $country_code
     * @return PhoneDto
     */
    public function setCountryCode(?string $country_code): PhoneDto
    {
        $this->country_code = $country_code;
        return $this;
    }

    /**
     * @return string
     */
    public function getCityCode(): ?string
    {
        return $this->city_code;
    }

    /**
     * @param string $city_code
     * @return PhoneDto
     */
    public function setCityCode(?string $city_code): PhoneDto
    {
        $this->city_code = $city_code;
        return $this;
    }

    /**
     * @return string
     */
    public function getExtension(): ?string
    {
        return $this->extension;
    }

    /**
     * @param string $extension
     * @return PhoneDto
     */
    public function setExtension(?string $extension): PhoneDto
    {
        $this->extension = $extension;
        return $this;
    }

    /**
     * @return string
     */
    public function getProvider(): ?string
    {
        return $this->provider;
    }

    /**
     * @param string $provider
     * @return PhoneDto
     */
    public function setProvider(?string $provider): PhoneDto
    {
        $this->provider = $provider;
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
     * @return PhoneDto
     */
    public function setRegion(?string $region): PhoneDto
    {
        $this->region = $region;
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
     * @return PhoneDto
     */
    public function setTimezone(?string $timezone): PhoneDto
    {
        $this->timezone = $timezone;
        return $this;
    }

    /**
     * @param array $data
     * @return self
     */
    public static function toDto(array $data): DtoInterface
    {
        return (new PhoneDto($data['number']))
            ->setType($data['type'])
            ->setPhone($data['phone'])
            ->setCountryCode($data['country_code'])
            ->setCityCode($data['city_code'])
            ->setExtension($data['extension'])
            ->setProvider($data['provider'])
            ->setRegion($data['region'])
            ->setTimezone($data['timezone']);
    }
}
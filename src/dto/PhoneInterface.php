<?php

namespace unapi\dadata\dto;

use unapi\interfaces\DtoInterface;

interface PhoneInterface extends DtoInterface
{

    /**
     * @param string $prepend
     * @return string
     */
    public function getNumber(string $prepend = ''): string;

    /**
     * @return string
     */
    public function getType(): ?string;

    /**
     * @return string
     */
    public function getPhone(): ?string;

    /**
     * @return string
     */
    public function getCountryCode(): ?string;

    /**
     * @return string
     */
    public function getCityCode(): ?string;

    /**
     * @return string
     */
    public function getExtension(): ?string;

    /**
     * @return string
     */
    public function getProvider(): ?string;

    /**
     * @return string
     */
    public function getRegion(): ?string;

    /**
     * @return string
     */
    public function getTimezone(): ?string;

}
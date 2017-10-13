<?php

namespace unapi\dadata\dto;

use unapi\interfaces\DtoInterface;

interface PassportInterface extends DtoInterface
{
    /**
     * @return string
     */
    public function getSeries(): string;

    /**
     * @return string
     */
    public function getNumber(): string;
}
<?php

namespace unapi\dadata\dto;

use unapi\interfaces\DtoInterface;

interface DadataPassportInterface extends DtoInterface
{
    /**
     * @return string
     */
    public function getSource(): string;

    /**
     * @return PassportInterface
     */
    public function getResult(): PassportInterface;

    /**
     * @return int
     */
    public function getQc(): int;
}
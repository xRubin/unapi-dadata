<?php

namespace unapi\dadata\dto;

use unapi\interfaces\DtoInterface;

interface FioInterface extends DtoInterface
{
    /**
     * @return string
     */
    public function getSurname(): string;

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return string
     */
    public function getPatronymic(): string;

    /**
     * @return string
     */
    public function getResult(): string;
}
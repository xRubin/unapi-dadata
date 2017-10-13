<?php

namespace unapi\dadata\dto;

use unapi\interfaces\DtoInterface;

interface DadataBirthDateInterface extends DtoInterface
{
    /**
     * @return string
     */
    public function getSource();

    /**
     * @return \DateTimeImmutable
     */
    public function getResult();

    /**
     * @return int
     */
    public function getQc();
}
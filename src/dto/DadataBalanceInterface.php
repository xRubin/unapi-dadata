<?php

namespace unapi\dadata\dto;

use unapi\interfaces\DtoInterface;

interface DadataBalanceInterface extends DtoInterface
{
    /**
     * @return float
     */
    public function getAmount(): float;
}
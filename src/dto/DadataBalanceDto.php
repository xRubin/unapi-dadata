<?php

namespace unapi\dadata\dto;

use unapi\interfaces\DtoInterface;

class DadataBalanceDto implements DadataBalanceInterface
{
    /** @var float */
    private $amount;

    /**
     * @param float $amount
     */
    public function __construct(float $amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @param array $data
     * @return self
     */
    public static function toDto(array $data): DtoInterface
    {
        return new DadataBalanceDto(
            (float)$data['amount']
        );
    }
}
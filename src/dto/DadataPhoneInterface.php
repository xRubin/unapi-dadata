<?php

namespace unapi\dadata\dto;

use unapi\interfaces\DtoInterface;

interface DadataPhoneInterface extends DtoInterface
{
    /**
     * @return string
     */
    public function getSource(): string;

    /**
     * @return PhoneInterface
     */
    public function getResult(): PhoneInterface;

    /**
     * @return int
     */
    public function getQc(): int;

    /**
     * @return int
     */
    public function getQcConflict(): int;
}
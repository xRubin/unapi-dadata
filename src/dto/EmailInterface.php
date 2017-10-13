<?php

namespace unapi\dadata\dto;

use unapi\interfaces\DtoInterface;

interface EmailInterface extends DtoInterface
{
    /**
     * @return string
     */
    public function getEmail(): string;

    /**
     * @return string
     */
    public function getLocal(): string;

    /**
     * @return string
     */
    public function getDomain(): string;

}
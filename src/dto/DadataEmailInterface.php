<?php

namespace unapi\dadata\dto;

use unapi\interfaces\DtoInterface;

interface DadataEmailInterface extends DtoInterface
{
    /**
     * @return string
     */
    public function getSource();

    /**
     * @return EmailInterface
     */
    public function getResult(): EmailInterface;

    /**
     * @return int
     */
    public function getQc();
}
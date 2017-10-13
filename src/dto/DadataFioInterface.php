<?php

namespace unapi\dadata\dto;

use unapi\interfaces\DtoInterface;

interface DadataFioInterface extends DtoInterface
{
    /**
     * @return string
     */
    public function getSource(): string;

    /**
     * @return FioInterface
     */
    public function getResult(): FioInterface;

    /**
     * @return int
     */
    public function getQc(): int;

    /**
     * @return FioInterface
     */
    public function getResultGenitive(): FioInterface;

    /**
     * @return FioInterface
     */
    public function getResultDative(): FioInterface;

    /**
     * @return FioInterface
     */
    public function getResultAblative(): FioInterface;

    /**
     * @return string
     */
    public function getGender(): string;

}
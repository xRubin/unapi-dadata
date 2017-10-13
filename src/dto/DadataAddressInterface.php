<?php

namespace unapi\dadata\dto;

use unapi\interfaces\DtoInterface;

interface DadataAddressInterface extends DtoInterface
{
    /**
     * @return string
     */
    public function getSource();

    /**
     * @return string
     */
    public function getResult();

    /**
     * @return int
     */
    public function getQcGeo();

    /**
     * @return int
     */
    public function getQcComplete();

    /**
     * @return int
     */
    public function getQcHouse();

    /**
     * @return int
     */
    public function getQc();

    /**
     * @return string
     */
    public function getUnparsedParts();

    /**
     * @return DadataMetroDistanceInterface[]
     */
    public function getMetro();

}
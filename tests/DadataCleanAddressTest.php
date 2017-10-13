<?php

use unapi\dadata\DadataCleanService;
use unapi\dadata\dto\DadataAddressDto;
use unapi\dadata\dto\AddressInterface;

class DadataCleanAddressTest extends \PHPUnit_Framework_TestCase
{
    /** @var DadataCleanService */
    private $service;

    private function getService(): DadataCleanService
    {
        if (null === $this->service) {
            $this->service = new DadataCleanService([
                'apiKey' => 'YOUR API KEY',
                'secretKey' => 'YOUR SECRET KEY',
            ]);
        }

        return $this->service;
    }

    public function testCorrect()
    {
        /** @var DadataAddressDto $response */
        $response = $this->getService()->cleanAddress('мск сухонска 11/-89')->wait();

        $this->assertEquals('мск сухонска 11/-89', $response->getSource());
        $this->assertInstanceOf(AddressInterface::class, $response->getResult());
        $this->assertEquals('ул Сухонская', $response->getResult()->getStreetWithType());
    }
}
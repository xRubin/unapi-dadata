<?php

use unapi\dadata\DadataCleanService;
use unapi\dadata\dto\DadataVehicleDto;
use unapi\dadata\dto\VehicleInterface;

class DadataCleanVehicleTest extends \PHPUnit_Framework_TestCase
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
        /** @var DadataVehicleDto $response */
        $response = $this->getService()->cleanVehicle('форд фокус')->wait();

        $this->assertEquals('форд фокус', $response->getSource());
        $this->assertInstanceOf(VehicleInterface::class, $response->getResult());
        $this->assertEquals('FORD', $response->getResult()->getBrand());
    }
}
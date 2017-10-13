<?php

use unapi\dadata\DadataCleanService;
use unapi\dadata\dto\DadataPassportDto;
use unapi\dadata\dto\PassportInterface;

class DadataCleanPassportTest extends \PHPUnit_Framework_TestCase
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
        /** @var DadataPassportDto $response */
        $response = $this->getService()->cleanPassport('4509 235857')->wait();

        $this->assertEquals('4509 235857', $response->getSource());
        $this->assertInstanceOf(PassportInterface::class, $response->getResult());
        $this->assertEquals('4509', $response->getResult()->getSeries());
    }
}
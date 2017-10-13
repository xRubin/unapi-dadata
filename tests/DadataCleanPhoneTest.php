<?php

use unapi\dadata\DadataCleanService;
use unapi\dadata\dto\DadataPhoneDto;
use unapi\dadata\dto\PhoneInterface;

class DadataCleanPhoneTest extends \PHPUnit_Framework_TestCase
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
        /** @var DadataPhoneDto $response */
        $response = $this->getService()->cleanPhone('тел 7165219 доб139')->wait();

        $this->assertEquals('тел 7165219 доб139', $response->getSource());
        $this->assertInstanceOf(PhoneInterface::class, $response->getResult());
        $this->assertEquals('Москва', $response->getResult()->getRegion());
    }
}
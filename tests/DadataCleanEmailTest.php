<?php

use unapi\dadata\DadataCleanService;
use unapi\dadata\dto\DadataEmailDto;
use unapi\dadata\dto\EmailInterface;

class DadataCleanEmailTest extends \PHPUnit_Framework_TestCase
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
        /** @var DadataEmailDto $response */
        $response = $this->getService()->cleanEmail('serega@yandex/ru')->wait();

        $this->assertEquals('serega@yandex/ru', $response->getSource());
        $this->assertInstanceOf(EmailInterface::class, $response->getResult());
        $this->assertEquals('serega@yandex.ru', $response->getResult()->getEmail());
    }
}
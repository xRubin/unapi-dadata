<?php

use unapi\dadata\DadataCleanService;
use unapi\dadata\dto\DadataBirthDateDto;

class DadataCleanBirthDateTest extends \PHPUnit_Framework_TestCase
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
        /** @var DadataBirthDateDto $response */
        $response = $this->getService()->cleanBirthDate('24/3/12')->wait();

        $this->assertEquals('24/3/12', $response->getSource());
        $this->assertInstanceOf(DateTimeImmutable::class, $response->getResult());
        $this->assertEquals('2012-03-24', $response->getResult()->format('Y-m-d'));
    }
}
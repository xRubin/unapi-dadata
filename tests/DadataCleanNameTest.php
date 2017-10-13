<?php

use unapi\dadata\DadataCleanService;
use unapi\dadata\dto\DadataFioDto;
use unapi\dadata\dto\FioInterface;

class DadataCleanNameTest extends \PHPUnit_Framework_TestCase
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
        /** @var DadataFioDto $response */
        $response = $this->getService()->cleanName('Срегей владимерович иванов')->wait();

        $this->assertEquals('Срегей владимерович иванов', $response->getSource());
        $this->assertInstanceOf(FioInterface::class, $response->getResult());
        $this->assertEquals('Сергей', $response->getResult()->getName());
    }
}
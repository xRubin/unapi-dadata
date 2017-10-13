<?php

namespace unapi\dadata;

use GuzzleHttp\Promise\FulfilledPromise;
use GuzzleHttp\Promise\PromiseInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Log\LoggerAwareInterface;
use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;
use function GuzzleHttp\json_decode;
use function GuzzleHttp\json_encode;

class DadataCleanService implements LoggerAwareInterface
{
    /** @var DadataClient */
    private $client;
    /** @var string */
    private $apiKey;
    /** @var string */
    private $secretKey;
    /** @var LoggerInterface */
    private $logger;
    /** @var string */
    private $responseClass = DadataResponseFabric::class;

    /**
     * @param array $config Service configuration settings.
     */
    public function __construct(array $config = [])
    {
        if (!isset($config['client'])) {
            $this->client = new DadataClient();
        } elseif ($config['client'] instanceof DadataClient) {
            $this->client = $config['client'];
        } else {
            throw new \InvalidArgumentException('Client must be instance of DadataClient');
        }

        if (isset($config['apiKey'])) {
            $this->apiKey = $config['apiKey'];
        } else {
            throw new \InvalidArgumentException('Dadata api key required');
        }

        if (isset($config['secretKey'])) {
            $this->secretKey = $config['secretKey'];
        } else {
            throw new \InvalidArgumentException('Dadata secret key required');
        }

        if (!isset($config['logger'])) {
            $this->logger = new NullLogger();
        } elseif ($config['logger'] instanceof LoggerInterface) {
            $this->setLogger($config['logger']);
        } else {
            throw new \InvalidArgumentException('Logger must be instance of LoggerInterface');
        }

        if (isset($config['responseClass']))
            $this->responseClass = $config['responseClass'];
    }

    /**
     * @inheritdoc
     */
    public function setLogger(LoggerInterface $logger): void
    {
        $this->logger = $logger;
    }

    /**
     * @param string $service
     * @param array $data
     * @return PromiseInterface
     */
    public function clean(string $service, array $data): PromiseInterface
    {
        $this->logger->debug('Service: {service}', ['service' => $service]);
        $this->logger->debug('Data: {data}', ['data' => var_export($data, true)]);

        return $this->client->requestAsync('POST', sprintf('/api/v2/clean/%s', $service), [
            'headers' => [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
                'Authorization' => sprintf('Token %s', $this->apiKey),
                'X-Secret' => $this->secretKey
            ],
            'body' => json_encode($data)
        ])->then(function (ResponseInterface $response) {
            $answer = $response->getBody()->getContents();
            $this->logger->debug('Response: {answer}', ['answer' => $answer]);
            return new FulfilledPromise(array_map(function (array $data) {
                return $this->responseClass::toDto($data);
            }, json_decode($answer, true)));
        });
    }


    /**
     * @param string $address
     * @return PromiseInterface
     */
    public function cleanAddress(string $address)
    {
        return $this->cleanAddresses([$address])->then(function (array $result) {
            return new FulfilledPromise($result[0]);
        });
    }

    /**
     * @param array $data
     * @return PromiseInterface
     */
    public function cleanAddresses(array $data)
    {
        return $this->clean('address', $data);
    }

    /**
     * @param string $birthDate
     * @return PromiseInterface
     */
    public function cleanBirthDate(string $birthDate)
    {
        return $this->cleanBirthdates([$birthDate])->then(function (array $result) {
            return new FulfilledPromise($result[0]);
        });
    }

    /**
     * @param array $data
     * @return PromiseInterface
     */
    public function cleanBirthDates(array $data)
    {
        return $this->clean('birthdate', $data);
    }

    /**
     * @param string $email
     * @return PromiseInterface
     */
    public function cleanEmail(string $email)
    {
        return $this->cleanEmails([$email])->then(function (array $result) {
            return new FulfilledPromise($result[0]);
        });
    }

    /**
     * @param array $data
     * @return PromiseInterface
     */
    public function cleanEmails(array $data)
    {
        return $this->clean('email', $data);
    }

    /**
     * @param string $name
     * @return PromiseInterface
     */
    public function cleanName(string $name)
    {
        return $this->cleanNames([$name])->then(function (array $result) {
            return new FulfilledPromise($result[0]);
        });
    }

    /**
     * @param array $data
     * @return PromiseInterface
     */
    public function cleanNames(array $data)
    {
        return $this->clean('name', $data);
    }

    /**
     * @param string $passport
     * @return PromiseInterface
     */
    public function cleanPassport(string $passport)
    {
        return $this->cleanPassports([$passport])->then(function (array $result) {
            return new FulfilledPromise($result[0]);
        });
    }

    /**
     * @param array $data
     * @return PromiseInterface
     */
    public function cleanPassports(array $data)
    {
        return $this->clean('passport', $data);
    }

    /**
     * @param string $phone
     * @return PromiseInterface
     */
    public function cleanPhone(string $phone)
    {
        return $this->cleanPhones([$phone])->then(function (array $result) {
            return new FulfilledPromise($result[0]);
        });
    }

    /**
     * @param array $data
     * @return PromiseInterface
     */
    public function cleanPhones(array $data)
    {
        return $this->clean('phone', $data);
    }

    /**
     * @param string $vehicle
     * @return PromiseInterface
     */
    public function cleanVehicle(string $vehicle)
    {
        return $this->cleanVehicles([$vehicle])->then(function (array $result) {
            return new FulfilledPromise($result[0]);
        });
    }

    /**
     * @param array $data
     * @return PromiseInterface
     */
    public function cleanVehicles(array $data)
    {
        return $this->clean('vehicle', $data);
    }

}
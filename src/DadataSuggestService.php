<?php

namespace unapi\dadata;

use GuzzleHttp\Promise\FulfilledPromise;
use GuzzleHttp\Promise\PromiseInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Log\LoggerAwareInterface;
use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;

use function GuzzleHttp\json_encode;
use function GuzzleHttp\json_decode;

class DadataSuggestService implements LoggerAwareInterface
{
    /** @var DadataClient */
    private $client;
    /** @var string */
    private $apiKey;
    /** @var LoggerInterface */
    private $logger;

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

        if (!isset($config['logger'])) {
            $this->logger = new NullLogger();
        } elseif ($config['logger'] instanceof LoggerInterface) {
            $this->setLogger($config['logger']);
        } else {
            throw new \InvalidArgumentException('Logger must be instance of LoggerInterface');
        }
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
    public function suggest(string $service, array $data): PromiseInterface
    {
        $this->logger->debug('Service: {service}', ['service' => $service]);
        $this->logger->debug('Data: {data}', ['data' => var_export($data, true)]);
        
        return $this->client->requestAsync('POST', sprintf('https://suggestions.dadata.ru/suggestions/api/4_1/rs/suggest/%s', $service), [
            'headers' => [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
                'Authorization' => sprintf('Token %s', $this->apiKey),
            ],
            'body' => json_encode($data)
        ])->then(function (ResponseInterface $response) {
            $answer = $response->getBody()->getContents();
            $this->logger->debug('Response: {answer}', ['answer' => $answer]);
            $result = json_decode($answer);
            return new FulfilledPromise($result->suggestions);
        });
    }

    /**
     * @param string $address
     * @param array $options
     * @return PromiseInterface
     */
    public function suggestAddress(string $address, array $options = [])
    {
        return $this->suggest('address', array_merge($options, ['query' => $address]));
    }

    /**
     * @param string $bank
     * @param array $options
     * @return PromiseInterface
     */
    public function suggestBank(string $bank, array $options = [])
    {
        return $this->suggest('bank', array_merge($options, ['query' => $bank]));
    }

    /**
     * @param string $email
     * @param array $options
     * @return PromiseInterface
     */
    public function suggestEmail(string $email, array $options = [])
    {
        return $this->suggest('email', array_merge($options, ['query' => $email]));
    }

    /**
     * @param string $name
     * @param array $options
     * @return PromiseInterface
     */
    public function suggestName(string $name, array $options = [])
    {
        return $this->suggest('fio', array_merge($options, ['query' => $name]));
    }

    /**
     * @param string $organization
     * @param array $options
     * @return PromiseInterface
     */
    public function suggestOrganization(string $organization, array $options = [])
    {
        return $this->suggest('party', array_merge($options, ['query' => $organization]));
    }


}
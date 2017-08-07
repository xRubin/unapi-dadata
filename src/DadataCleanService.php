<?php
namespace unapi\dadata;

use GuzzleHttp\Promise\PromiseInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Log\LoggerAwareInterface;
use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;

use function GuzzleHttp\json_encode;
use function GuzzleHttp\json_decode;

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
            return json_decode($answer);
        });
    }
}
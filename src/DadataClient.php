<?php
namespace unapi\dadata;

use GuzzleHttp\Client;

class DadataClient extends Client
{
    /**
     * @param array $config
     */
    public function __construct(array $config = [])
    {
        $config['base_uri'] = 'https://dadata.ru';
        $config['verify'] = false;

        parent::__construct($config);
    }
}
<?php

namespace WebCrawler\Handler\Volvo;

use GuzzleHttp\Client;
use WebCrawler\Handler\Contract\Web as WebContract;

class Web extends WebContract
{
    const BASE_URL_DEFAULT = 'http://www.perimpecas.com.br/';
    const URL_DEFAULT = 'produtos/index.php';
    const NAME_QUERY_PARAM_DEFAULT = 'pesq';

    protected $clientOptions = [
        'base_uri' => self::BASE_URL_DEFAULT,
        'verify' => false,
    ];

    /**
     * @param Client $client
     * @param string $param
     * @param array $data
     * @return mixed
     */
    protected function makeRequest(Client $client, $param, $data)
    {
        return $client->getAsync(self::URL_DEFAULT, [
            'query' => [
                self::NAME_QUERY_PARAM_DEFAULT => $param,
            ],
        ]);
    }
}

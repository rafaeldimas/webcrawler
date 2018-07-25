<?php

namespace WebCrawler\Product\Web;

use GuzzleHttp\Client;
use GuzzleHttp\Promise\PromiseInterface;
use WebCrawler\Product\Web;

class AgaParts extends Web
{
    const BASE_URL_DEFAULT = 'https://www.aga-parts.com/';
    const URL_DEFAULT = 'search';
    const NAME_QUERY_PARAM_DEFAULT = 'q';

    protected $clientOptions = [
        'base_uri' => self::BASE_URL_DEFAULT,
        'verify' => false,
    ];

    /**
     * @param Client $client
     * @param $param
     * @return PromiseInterface
     */
    protected function makeRequest(Client $client, $param)
    {
        return $client->getAsync(self::URL_DEFAULT, [ 'query' => [self::NAME_QUERY_PARAM_DEFAULT => $param]]);
    }
}

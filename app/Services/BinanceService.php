<?php

namespace App\Services;

use GuzzleHttp\Client;

class BinanceService
{
    protected $baseUrl = 'https://api.binance.com/api/v3/';
    protected $apiKey;
    protected $secretKey;
    protected $httpClient;

    public function __construct()
    {
        $this->apiKey = config('services.binance.api_key');
        $this->secretKey = config('services.binance.secret_key');
        $this->httpClient = new Client(['base_uri' => $this->baseUrl]);
    }

    public function createOrder($symbol, $side, $price = null)
    {
        $params = [
            'symbol' => $symbol,
            'side' => $side,
            'timestamp' => round(microtime(true) * 1000),
        ];

        $queryString = http_build_query($params);
        $signature = hash_hmac('sha256', $queryString, $this->secretKey);

        try {
            $response = $this->httpClient->post('order', [
                'query' => $queryString . "&signature=$signature",
                'headers' => [
                    'X-MBX-APIKEY' => $this->apiKey,
                ],
            ]);

            return json_decode($response->getBody()->getContents(), true);
        } catch (\Exception $e) {
            return ['error' => $e->getMessage()];
        }
    }
}

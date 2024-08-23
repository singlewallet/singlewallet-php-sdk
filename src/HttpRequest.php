<?php
declare(strict_types=1);

namespace SingleWallet;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use SingleWallet\Exceptions\InvalidAPIKeyException;

class HttpRequest {
    protected $client;
    const VERSION = '1.1.0';

    public function __construct(string $endpoint,string $apiKey, $timeout=5){
        $this->client = new Client([
            'base_uri' => $endpoint,
            'timeout'  => $timeout,
            'headers' => [
                'sw-key' => $apiKey,
                'sdk-version' => self::VERSION,
                'Content-Type' => 'application/json',
            ],
        ]);
    }

    public function request($method, $path, $params = null){
        $output = [
            'code'=>0,
            'body'=>null,
        ];

        $data = [];

        try {
            if(!is_null($params)){
                $data = [
                    'form_params'=>$params,
                ];
            }

            $response = $this->client->request($method, $path, $data);
            $output['code'] = $response->getStatusCode();
            $output['body'] = json_decode((string)$response->getBody());
        } catch (ClientException $e) {
            $output['code'] = $e->getResponse()->getStatusCode();
            if($output['code'] == 401){
                throw new InvalidAPIKeyException();
            }

            $output['body'] = json_decode((string)$e->getResponse()->getBody());
        }

        return $output;
    }

    public function get(string $path) : array {
        return $this->request('get',$path);
    }

    public function post(string $path,array $params) : array {
        return $this->request('post',$path, $params);
    }

    public function delete(string $path,array $params = null) : array {
        return $this->request('delete',$path, $params);
    }

}
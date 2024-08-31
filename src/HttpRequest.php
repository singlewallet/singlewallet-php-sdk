<?php
declare(strict_types=1);

namespace SingleWallet;

use SingleWallet\Exceptions\InvalidAPIKeyException;

class HttpRequest {
    const VERSION = '1.3.0';

    protected $headers;
    protected $timeout = 5;

    protected $endpoint;

    public function __construct(string $endpoint,string $apiKey, $timeout=5){
        $this->headers = [
            "sw-key: ".$apiKey,
            "sdk-version: ".self::VERSION,
        ];

        $this->timeout = $timeout;

        $this->endpoint = $endpoint;
    }

    public function request($method, $path, $params = null){
        $output = [
            'code'=>0,
            'body'=>null,
        ];

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $this->endpoint.$path);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_TIMEOUT, $this->timeout);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $this->headers);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);

        switch ($method) {
            case "GET":
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
                break;
            case "POST":
                curl_setopt($curl, CURLOPT_POST, 1);
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
                curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($params));
                break;
            case "DELETE":
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
                if(!is_null($params)){
                    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($params));
                }
                break;
        }

        $response = curl_exec($curl);
        $info = curl_getinfo($curl);

        if($response == false){
            throw new \Exception("connection issue");
        }

        if($info['http_code'] == 401){
            throw new InvalidAPIKeyException();
        }else{
            $output['code'] = $info['http_code'];
            $output['body'] = json_decode($response);
        }

        curl_close($curl);

        return $output;
    }

    public function get(string $path) : array {
        return $this->request('GET',$path);
    }

    public function post(string $path,array $params) : array {
        return $this->request('POST',$path, $params);
    }

    public function delete(string $path,array $params = null) : array {
        return $this->request('DELETE',$path, $params);
    }

}
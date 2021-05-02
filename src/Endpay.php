<?php

namespace Endpay;

use GuzzleHttp\Client;

class Endpay {
    private $commerceId;
    private $apiKey;
    private $apiVersion;
    private $base_uri;
    private $timeout;
    private $client;
    
    function __construct($production = true) {
        $this->apiVersion = '1.0';
        $this->timeout = 5.0;
        $this->base_uri = $production ? "https://api.endpay.cl/{$this->apiVersion}/" : "http://localhost:3000/api/{$this->apiVersion}/";
        $this->setClient();
    }

    /**
     * Set Commerce ID
     *
     * @param string $commerceId
     * @return void
     */
    public function setCommerceId($commerceId){
        $this->commerceId  = $commerceId;
        $this->setClient();
    }

    public function setApiKey($apiKey){
        $this->apiKey  = $apiKey;
        $this->setClient();
    }

    public function setTimeout($timeout){
        $this->timeout  = $timeout;
        $this->setClient();
    }

    private function setClient() {
        $this->client = new Client([
            'base_uri' => $this->base_uri,
            'timeout' => $this->timeout,
            'headers' => [
                'x-api-key' => $this->apiKey,
                'x-commerce-id' => $this->commerceId
            ],
        ]);
    }

    /**
     * Instance class Payments
     *
     * @return object
     */
    public function payments() {
        return new Payments($this->client);
    }
}
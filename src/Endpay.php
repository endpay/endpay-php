<?php

namespace Endpay;

class Endpay {
    var $commerceId;
    var $apiKey;
    var $baseURL;
    var $timeout;
    var $apiVersion;
    
    function __construct() {
        $this->apiVersion = '1.0';
        $this->baseURL = "https://api.endpay.cl/{$this->apiVersion}";
    }

    public function setCommerceId($commerceId){
        $this->commerceId  = $commerceId;
    }

    public function setapiKey($apiKey){
        $this->apiKey  = $apiKey;
    }

    public function setTimeout($timeout){
        $this->timeout  = $timeout;
    }
    
    public function setBaseURL($baseURL){
        $this->baseURL  = $baseURL;
    }
    
    public static function payments() {
        return new Payments();
    }
}
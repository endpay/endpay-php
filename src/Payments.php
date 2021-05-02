<?php

namespace Endpay;

class Payments {
    private $client;
    
    function __construct($client){
        $this->client = $client;
    }
    
    public function create($params = []) {
        $response = $this->client->request('POST', 'payments/create', [
            'form_params' => $params
        ]);

        return $response->getBody();
    }

    public static function read() {
        echo 'read - Payment';
    }
    
    public static function delete() {
        echo 'delete - Payment';
    }
}
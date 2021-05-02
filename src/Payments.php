<?php

namespace Endpay;

/**
 * Interact with the Endpay Payments API
 */
class Payments {
    private $client;
    
    function __construct($client){
        $this->client = $client;
    }
    
    /**
     * Create payment
     *
     * @param array $params
     * @return object
     */
    public function create($params = []) {
        $response = $this->client->request('POST', 'payments/create', [
            'form_params' => $params
        ]);

        return json_decode($response->getBody(), true);
    }

    /**
     * Get payment
     *
     * @param integer $id
     * @return object
     */
    public function read($id) {
        $response = $this->client->request('GET', "payments/read/{$id}");

        return json_decode($response->getBody(), true);
    }
    
    /**
     * Delete payment
     *
     * @param integer $id
     * @return object
     */
    public static function delete($id) {
        echo 'delete - Payment';
    }
}
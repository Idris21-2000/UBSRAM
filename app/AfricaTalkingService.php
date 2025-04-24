<?php

namespace App;
use GuzzleHttp\Client;

class AfricaTalkingService
{
    protected $client;
    protected $username;
    protected $apiKey;

    public function __construct()
    {
        $this->client = new Client();
        $this->username = config('services.africastalking.username');
        $this->apiKey = config('services.africastalking.key');
    }

    public function sendUSSDRequest(array $params)
    {
        $url = 'https://api.africastalking.com/ussd/send'; // Adjust if using sandbox

        try {
            $response = $this->client->post($url, [
                'form_params' => array_merge($params, [
                    'username' => $this->username,
                ]),
                'headers' => [
                    'apiKey' => $this->apiKey,
                    'Accept' => 'application/json',
                ],
            ]);

            return json_decode($response->getBody(), true);
        } catch (\Exception $e) {
            return ['error' => $e->getMessage()];
        }
    }
}

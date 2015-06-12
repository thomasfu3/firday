<?php

require 'vendor/autoload.php';

use ExtrabuxApi\Client;

$key = "a3d894c1f99b3508724817b80c2ffc6e";
$secret = "7b8f8ae5dc589f395c97eba4a7a77e9fbd3ebd3d";
$baseUrl = 'http://www.extrabux.com';
$client = Client::create($key, $secret, $baseUrl);

$response = $client->getMerchantList(['limit' => 4, 'page' => 2]);
$data = $response->toArray();
print_r($data);
exit;

$merchantResponse = $client->getMerchant(['id' => 3]);
$merchantData = $merchantResponse->toArray();
print_r($merchantData);
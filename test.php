<?php
require 'vendor/autoload.php';

use carono\regru\Client;
use carono\regru\PaymentConfig;

$payment = new PaymentConfig();
$payment->append('asdf');

var_dump($payment[0]);
    exit;

$client = new Client();
$client->username = 'test';
$client->password = 'test';
$client->inputFormat = 'json';
//$client->guzzleOptions = ['proxy' => 'tcp://localhost:8888'];
//$result = $client->userGetBalance('EUR');
$result = $client->getUserId();
var_dump($result);
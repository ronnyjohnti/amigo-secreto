<?php

require __DIR__ . '/../vendor/autoload.php';

use \Mailjet\Resources;

\Dotenv\Dotenv::createImmutable(__DIR__ . '/../')->load();

$apiKey = getenv('MJ_APIKEY_PUBLIC');
$apiSecret = getenv('MJ_APIKEY_PRIVATE');

$mj = new \Mailjet\Client($apiKey, $apiSecret);
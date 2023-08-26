# sdk-php-speed4trade
A SOAP PHP SDK to use with the Speed4Trade Soap API

# Installation

`composer require macropage/sdk-php-speed4trade`

# How to use it

```php
<?php
use macropage\SDKs\speed4trade\Speed4TradeClientFactory;
use macropage\SDKs\speed4trade\Type\FetchMandators;

require_once __DIR__ . '/vendor/autoload.php';

$client = Speed4TradeClientFactory::factory(
    wsdl    : 'speed4trade.wsdl',
    proxies : [
        'http'  => '.......',
        'https' => '........',
    ],
    username: '.......',
    password: '.......'
);
$request = new FetchMandators('<request method="fetchMandators" version="1.0.0"></request>');
$return = $client->fetchMandators($request);
print_r($return);
```

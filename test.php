<?php
require_once 'vendor/autoload.php';

$objCurrency = (new \ArtemHarbetskyi\CurrencyExchange())
    ->setCurrency('USD')
    ->today()
    ->toJson()
    ->make();

//var_dump($objCurrency);
$result = \ArtemHarbetskyi\Currency::get($objCurrency);
var_dump($result);




echo '<pre>';
//var_dump(
//    $result
//);
echo '</pre>';

<?php
require_once 'vendor/autoload.php';

$obj = new \ArtemHarbetskyi\CurrencyExchange();
$obj->setCurrency('usd');

echo $obj->make()
    ->today(true);
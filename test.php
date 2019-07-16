<?php
require_once 'vendor/autoload.php';

$obj = new \ArtemHarbetskyi\CurrencyExchange();
$obj->setCurrency('GYD');

echo '<pre>';
var_dump(
    $obj->make()->today()
);
echo '</pre>';

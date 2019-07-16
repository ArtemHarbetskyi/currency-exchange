<?php
require_once 'vendor/autoload.php';

$obj = (new \ArtemHarbetskyi\CurrencyExchange())->setCurrency('usd')
    ->today()
    ->toJson()
    ->make()
    ->sendRequest();

echo '<pre>';
var_dump(
    $obj
);
echo '</pre>';

<?php

namespace ArtemHarbetskyi;

use ArtemHarbetskyi\Lib\Curl;

class ExchangeRequestBuilder extends CurrencyExchange
{
    private $exchange;

    public function __construct($exchange)
    {
        $this->exchange = $exchange;
    }


    public function sendRequest()
    {
        $response = Curl::get($this->exchange->url_request);
        // decode to normalize
        return json_decode($response);
    }


}
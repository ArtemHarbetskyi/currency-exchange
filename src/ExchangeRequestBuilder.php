<?php

namespace ArtemHarbetskyi;

use ArtemHarbetskyi\Lib\Curl;

class ExchangeRequestBuilder extends CurrencyExchange
{

    public function sendRequest($urlRequest)
    {
        $response = Curl::get($urlRequest);
        // decode to normalize

        return json_decode($response)[0];
    }


}
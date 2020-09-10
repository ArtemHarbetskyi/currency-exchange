<?php

namespace ArtemHarbetskyi;


class Currency
{
    public static function get($objCurrency)
    {
         return (new ExchangeRequestBuilder())->sendRequest($objCurrency->url_request);
    }
}
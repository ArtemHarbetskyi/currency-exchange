<?php

namespace ArtemHarbetskyi;

/**
 * ==
 * Currency Exchange NBU
 * Author: Harbetskyi Artem
 * ==
 */
class CurrencyExchange
{

    public $options;


    public $currency;

    /*
     * Require file options
     */
    public function __construct()
    {
        $this->options = require_once 'options.php';
        return $this;
    }

    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }

    public function make()
    {
        return new ExchangeRequestBuilder($this);
    }

}
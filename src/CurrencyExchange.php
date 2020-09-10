<?php

namespace ArtemHarbetskyi;

use ArtemHarbetskyi\Additional\tRequestExchange;
use Exception;

/**
 * ==
 * Currency Exchange NBU
 * Author: Harbetskyi Artem
 * ==
 */
class CurrencyExchange
{

    /*
     * additional func
     */
    use tRequestExchange;


    public $options;

    public $currency;

    public $url_request;


    /*
     * Require file options
     */
    public function __construct()
    {
        try {

            if (!file_exists('./options.php')) {
                throw new \Exception('Not found option file');
            }

            $this->options = require_once 'options.php';
            return $this;

        } catch (\Exception $e) {
            echo $e->getMessage();
        }

        return false;
    }

    public function setCurrency($currency)
    {
        try {
            if (!is_string($currency)) {
                throw new Exception('setCurrency is string!');
            }

            $this->currency = $currency;
            return $this;
        } catch (\Exception $e) {
            echo $e->getMessage();
        }

    }

    public function make()
    {
        return $this;
    }

}
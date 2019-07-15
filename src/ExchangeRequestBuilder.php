<?php

namespace ArtemHarbetskyi;


use ArtemHarbetskyi\Lib\Curl;

class ExchangeRequestBuilder extends CurrencyExchange
{
    private $exchange;

    public function __construct(CurrencyExchange $exchange)
    {
        $this->exchange = $exchange;
    }


    /*
     * Курс на дату по валюті (код валюти літерний, регістр значення не має):
     */
    public function today($only_rate = false)
    {
        if ($only_rate != false) {
            $request = Curl::get($this->exchange->options['site'] . 'NBUStatService/v1/statdirectory/exchange?valcode=' . $this->exchange->currency . '&json');

            return json_decode($request)[0]->rate ? json_decode($request)[0]->rate : 0;
        }

        $request = Curl::get($this->exchange->options['site'] . 'NBUStatService/v1/statdirectory/exchange?valcode=' . mb_strtoupper($this->exchange->currency) . '&json');

        return json_decode($request);
    }


}
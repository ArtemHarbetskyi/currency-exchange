<?php

namespace ArtemHarbetskyi\Additional;

use ArtemHarbetskyi\Lib\Curl;

trait tRequestExchange
{

    protected $url_request;

    /*
     * with onlyu rate
     */
//    public function only_rate()
//    {
//        $request = Curl::get($this->exchange->options['site'] . 'NBUStatService/v1/statdirectory/exchange?valcode=' . $this->exchange->currency . '&json');
//
//        return json_decode($request)[0]->rate ? json_decode($request)[0]->rate : 0;
//    }


    /*
     *  request in to date
    */
    public function today()
    {
        $this->url_request = $this->options['site'] . 'NBUStatService/v1/statdirectory/exchange?valcode=' . $this->currency;
        return $this;
    }

    /*
     * request from to date
     * format: 20190716
    */
    public function fromDate($date)
    {
        $this->url_request = $this->options['site'] . 'NBUStatService/v1/statdirectory/exchange?date=' . $date;
        return $this;
    }

    /*
     *  Transform response to JSON
     */
    public function toJson()
    {
        $this->url_request .= '&json';
        return $this;
    }

}
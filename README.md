Currency-Exchange NBU ``` 0.0.2 beta``` 
=====================

* added fromDate

 ```
$obj = (new CurrencyExchange())->setCurrency('usd')
    ->today()
    ->toJson()
    ->make()
    ->sendRequest();
   ``` 
 
#### Country Currency Codes ```->setCurrency($code)```
*  USD	United States Dollar
*  EUR	Euro Member Countries
*  RUB	Russia Ruble
...
 
 [ More = ISO 4217 Currency Codes >> ](https://www.xe.com/iso4217.php) 
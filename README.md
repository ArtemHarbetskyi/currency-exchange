UAH - Currency-Exchange NBU ``` 0.0.2 beta``` 
=====================

* added fromDate

 ```
// make new object
$obj = (new CurrencyExchange())
           ->setCurrency('USD')
           ->today()
           ->toJson()
           ->make();
   ``` 

```
// make result
$result = Currency::get($objCurrency);
```
 
#### Country Currency Codes ```->setCurrency($code)```
*  USD	United States Dollar
*  EUR	Euro Member Countries
*  RUB	Russia Ruble
...
 
 [ More = ISO 4217 Currency Codes >> ](https://www.xe.com/iso4217.php) 
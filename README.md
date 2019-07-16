Currency-Exchange NBU ``` 0.0.1 beta``` 
=====================

### Install

```composer require artem-harbetskyi/currency-exchange```  


### Usage
##### Current course

```
$obj = new CurrencyExchange();    
$obj->setCurrency('usd');                      
$obj->make();  
$obj->today( //only_rate? ) ; only_rate? - true || false
```
 
 

``` Result: float(25.74092)``` 

----------------------------------- 

##### Current course #2
```
$obj = (new CurrencyExchange())     
                ->setCurrency('usd')                        
                ->make() 
                ->today() ; only_rate? - true || false
```                 
 

```
Result: 

   array(1) {
     [0]=>
     object(stdClass)#4 (5) {
       ["r030"]=>
       int(840)
       ["txt"]=>
       string(17) "Долар США"
       ["rate"]=>
       float(25.74092)
       ["cc"]=>
       string(3) "USD"
       ["exchangedate"]=>
       string(10) "16.07.2019"
     }
   }
              
```                 


 
#### Country Currency Codes ```->setCurrency($code)```
*  USD	United States Dollar
*  EUR	Euro Member Countries
*  RUB	Russia Ruble
...
 
 [ More = ISO 4217 Currency Codes >> ](https://www.xe.com/iso4217.php) 
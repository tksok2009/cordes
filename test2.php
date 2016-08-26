<?php

// input
$input_payments = trim(fgets(STDIN));

// init coin
$En1 = new Coin(1,$input_payments);
$En5 = new Coin(5,$input_payments);
$En10 = new Coin(10,$input_payments);
$En50 = new Coin(50,$input_payments);
$En100 = new Coin(100,$input_payments);
$En500 = new Coin(500,$input_payments);


// all pettern
$All_pattern = $En500->stock_pattern * $En100->stock_pattern * $En50->stock_pattern * $En10->stock_pattern * $En5->stock_pattern * $En1->stock_pattern;

echo $All_pattern;



/**
* Coin class
*
*/
class Coin{

//1,5,10,100,500
public $coin; 

// init stock pettern
public $stock_pattern; 


function __construct($coin,$require_payment){
// coin type
$this->coin = $coin;

//$case_1 is ¥1
$case_1 = ceil($require_payment / 5 );



// require coins & require stock
$coin != 1 ? $this->stock_pattern = floor($require_payment / $coin)  : $this->stock_pattern = $case_1 ;


$check = $this->stock_pattern ;


$check == 0 ? $this->stock_pattern = 1 : "" ;

echo PHP_EOL . $this->stock_pattern . PHP_EOL;
}

/**
*
* @return integer use coins payout
*/
function payments($count_coins){

$this->stock = $this->stock - $count ;

$payout = $this->$coin * $count_coins;
return $payout;
}
}

 

 

 

 

 

 

 

 

 

 

 
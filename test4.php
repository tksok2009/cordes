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
 

echo "En5 is " . $En5->stock . PHP_EOL.PHP_EOL ;

// logic
$sum = 0;
$check = 0;
$en1 = 0;
$en5 = 0;

$goal = $En1->stock_check() * $En5->stock_check() * $En10->stock_check();
echo "goal is " . $goal . PHP_EOL.PHP_EOL ;

for ($i = 0; $i <= $goal ; $i++) {

	$en1 = $En1->payments(1);
	$sum = $en1;


	do {
	$en5 = $En5->payments(1);
	$sum += $en5;
	//echo PHP_EOL.$sum.PHP_EOL;

	//echo PHP_EOL.$sum.PHP_EOL;
	//echo $input_payments;

					echo "[" . $en5 . " " .$en1 . "]";
					if($input_payments == $sum ){
						$check = $check + 1;
						echo "hitt!";
					}


	} while ( $En5->stock >= 0 );



	//echo PHP_EOL.$sum.PHP_EOL;



	//reset
	$En5->reset_stock();
	//$En10->reset_stock();
}


echo PHP_EOL.PHP_EOL."check is ".$check.PHP_EOL;





/**
* Coin class
*
*/
class Coin{

	//1,5,10,100,500
	public $coin; 

	// init stock
	public $stock; 

	//temporary stock
	public $stock_temp;

	function __construct($coin,$require_payment){
	// coin type
	$this->coin = $coin;

	// require coins & require stock
	$this->stock = floor($require_payment / $coin);
	$this->stock_temp = $this->stock;

	//echo PHP_EOL . $this->stock . PHP_EOL;
	}


	/**
	*
	* @return integer use coins payout
	*/
	function payments($count_coins){

	$payout = $this->coin * $this->stock;

	$this->stock = $this->stock != 0 ? $this->stock - $count_coins : 0 ;
	return $payout;
	}

	function reset_stock(){
	$this->stock = $this->stock_temp;
	//echo "reset";
	}

	function stock_check(){
		//$stock_check = $this->stock != 0 ? $this->stock - $count_coins : 1 ;

		$stock_check = $this->stock + 1 ;
		return $stock_check;
	}

}

 

 

 

 

 

 

 

 

 

 

 
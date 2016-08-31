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
 


// 1
// 1 * 5 = 5
// 5 * 2 = 10
// 10 * 5 = 50
// 50 * 2 = 100
// 100 * 5 = 500

// ex  20


// logic
$sum = 0;
$patterns = 0;

for ($en500 = 0; $en500 <= $En500->stock ; $en500++) {
for ($en100 = 0; $en100 <= $En100->stock ; $en100++) {
for ($en50 = 0; $en50 <= $En50->stock ; $en50++) {
for ($en10 = 0; $en10 <= $En10->stock ; $en10++) {
for ($en5 = 0; $en5 <= $En5->stock ; $en5++) {
for ($en1 = 0; $en1 <= $En1->stock ; $en1++) {

			// the first make: 
			// [ 500,100, 50, 10, 5, 1 ] array type list
			// after make total pay == input_payments
			$sum =  $en500*500 + $en100*100 + $en50*50 + $en10*10 + $en5*5 + $en1*1;
					
			if($input_payments == $sum ){
						echo PHP_EOL. "[" .$en500." ".$en100 ." ".$en50. " " .$en10. " ".$en5." ".$en1. "]";
						$patterns = $patterns + 1;
			}

}
}
}
}
}
}




// result pattern
echo $patterns;





/**
* Coin class
*
*/
class Coin{

	//1,5,10,100,500
	public $coin; 

	// init stock
	public $stock; 

	function __construct($coin,$require_payment){
	// coin type
	$this->coin = $coin;

	// require coins & require stock
	$this->stock = floor($require_payment / $coin);

	}

}

 

 

 

 

 

 

 

 

 

 

 
<?php
//
$input_payments = trim(fgets(STDIN));

//
/*
$itinokurai =substr($input_payments, -1);


if($itinokurai == 0){
}elseif($itinokurai <= 4){
$input_payments = floor($input_payments/10) * 10;
}elseif($itinokurai <= 9){
$input_payments = floor($input_payments/10) * 10 + 5;
}
*/








$PatterArray = [];
for ($en500 = 0; $en500 <= 1 ; $en500++) {
for ($en100 = 0; $en100 <= 1 ; $en100++) {
for ($en50 = 0; $en50 <= 1 ; $en50++) {
for ($en10 = 0; $en10 <= 1 ; $en10++) {
for ($en5 = 0; $en5 <= 1 ; $en5++) {
for ($en1 = 0; $en1 <= 1 ; $en1++) {

	$sum = $en500*500 + $en100*100 + $en50*50 + $en10*10 + $en5*5 + $en1*1;

	if($sum != 0){
	$PatterArray[] = ['500en'=>$en500,'100en'=>$en100,'50en'=>$en50,'10en'=>$en10,'5en'=>$en5,'1en'=>$en1,
	'sum' => $sum];
	}


}
}
}
}
}
}






$check = 0;
foreach ($PatterArray as $value) {

	$remaind = $input_payments - $value['sum'];





	if(($input_payments >= $value['sum'])){
	

		$only1bid = $value['500en'] + $value['100en'] + $value['50en'] + $value['10en'] + $value['5en'] + $value['1en'];

			if(($only1bid == 1) and ($remaind >= 0)){
			

			$only1bid_b = $value['500en']*500 + $value['100en']*100 + $value['50en']*50
		 	+ $value['10en']*10 + $value['5en']*5 + $value['1en']*1;

				if(($input_payments % $only1bid_b) == 0){
	

				
					$check_temp = 1;
					$check = $check + $check_temp;
					



				 	echo "★ ".
				 	$value['sum']."--- ".$value['500en']." ".$value['100en']." ".$value['50en']." ".
				 	$value['10en']." ".$value['5en']." ".$value['1en'].
				 	" -- " . $check_temp.
				 	PHP_EOL;
				}

			}elseif($remaind >= 0){

				/*
				if(($value['500en'] != 0) and 
					($value['100en'] != 0) and 
					($value['50en'] != 0) and 
					($value['10en'] != 0) and 
					($value['5en'] != 1) and 
					($value['1en'] != 1) 
					){

				$pattern500 = floor(($remaind ) /500) * $value['500en'];
				$pattern100 = floor(($remaind ) /100) * $value['100en'];
				 $pattern50 = floor(($remaind ) /50) * $value['50en'];
				 $pattern10 = floor(($remaind ) /10) * $value['10en'];
				  $pattern5 = floor(($input_payments-1) / 5) * $value['5en'];

				  $check = $check + $pattern500 + $pattern100 + $pattern50 + $pattern10 + $pattern5 ;
				*/
				//}else{


				  /*
					600

					11111KL/M

				  */


				$pattern500 = floor(($remaind + $value['500en']*500 ) /500) * $value['500en'];
				
				$pattern100 = floor(($remaind + ($value['100en']*100))/100) * $value['100en'];

				$pattern50 = floor(($remaind + ($value['50en']*50))/50) * $value['50en'];
				

				$pattern10 = floor(($remaind + ($value['10en']*10))/10) * $value['10en'];


				if(($value['1en'] == 0) and ($value['100en'] == 0)){
				$pattern5 = floor(($remaind + ($value['5en']*5))/5) * $value['5en'];
				}else{
				$pattern5 = floor(($remaind - ($value['10en']*10) + ($value['5en']*5))/5) * $value['5en'];					
				}


					//echo "-- ".$remaind." ". $pattern5 ." --";

				
				 $check_temp = $pattern500 + $pattern100 + $pattern50 + $pattern10 + $pattern5 ;

				 if($check_temp > 0){
				 	$check = $check + $check_temp;

				 	echo "○ ".
				 	$value['sum']."--- ".$value['500en']." ".$value['100en']." ".$value['50en']." ".
				 	$value['10en']." ".$value['5en']." ".$value['1en'].
				 	" -- " . $check_temp.
				 	PHP_EOL;

				 }

				/*
				 $pattern50 = floor(($remaind ) /50) * $value['50en'];

				 $pattern10 = floor(($remaind ) /10) * $value['10en'];
				
				  $pattern5 = floor(($remaind ) / 5) * $value['5en'];

*/
				//}


			}

	} // end if 
}


echo $check == 0 ? 1 : $check;



/*
0 0 0 0 0 0 0
5 2 5 2 5 2 5

1 1

1 1 1

0 1

10
   55
   55
   5     5

-----------
関係性をとくには数式を重ねるしかない








-----------
abcd
1011

12	q


-----------
abcd
1111

require - abcd * (50,10,5,1)

a = a -1
+
b = (a - 1) * 

-----------
a
1

= 1

-----------
ab
11

require - ab * (5,1)

a = a - 1

-----------
abc
111

require - abc * (10,5,1)

a = a - 1 
+
b = (a - 1 ) * 2 ( 2*10 /5 ) 
この場合6

-----------



$





















*/





















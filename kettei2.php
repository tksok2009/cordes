<?php
// notice stop
ini_set('display_errors', 0);

// input
$input_payments = trim(fgets(STDIN));

// pattern init
// 500 100 50 10 5 1
$pattern_arary = [];
for($i1=0;$i1<=1;$i1++){	
for($i5=0;$i5<=1;$i5++){
//for($i10=0;$i10<=1;$i10++){
//for($i50=0;$i50<=1;$i50++){
//for($i100=0;$i100<=1;$i100++){
//for($i500=0;$i500<=1;$i500++){
	$pattern_arary[] = ['500en'=> $i500,'100en'=>$i100,'50en'=>$i50,'10en'=>$i10,'5en'=>$i5,'1en'=>$i1];
//}
//}
//}
//}
}
}
//print_r($pattern_arary);


//logic
$check = 0;

foreach ($pattern_arary as $array) {

		//$sum = $entype['5en'] * 5 + $entype['1en'] * 1 ;
		SumCheck($array,$check,$input_payments);












}





/**
*
* @return Int payout
*
*/
function SumCheck($array,&$check,&$input_payments){

$sum = 0;

//print_r($array);

	do {
		$ck = 0;

		/*
		if($ck < 1){
		$sum += $array['500en'] * 500;
		$ck = PaymentsCheck($sum,$check,$input_payments);
		}

		if($ck < 1){
		$sum += $array['100en'] * 100;
		$ck = PaymentsCheck($sum,$check,$input_payments);
		}

		if($ck < 1){
		$sum += $array['50en'] * 50;
		$ck = PaymentsCheck($sum,$check,$input_payments);
		}


		if($ck < 1){
		$sum += $array['10en'] * 10;
		$ck = PaymentsCheck($sum,$check,$input_payments);
		}
		*/

		/*
		if($ck < 1){
		$sum += $array['5en'] * 5;
		$ck = PaymentsCheck($sum,$check,$input_payments);
		}
		*/
		

		if($ck < 1){
		$sum += $array['1en'] * 1;
		$ck = PaymentsCheck($sum,$check,$input_payments);
		}

		
		//if($ck == 3){
		//$ck = 3;
		//}
		
		//echo $ck;

	} while ($ck <= 2);


}



function PaymentsCheck($sum,&$check,&$input_payments){

echo $sum;

	if($sum == $input_payments){

		$check = $check + 1;
		echo $check;
		return 3;

	} elseif($sum < $input_payments){

		return 0;

	} else {

		return 3;

	}
		$check = $check + 1;
}


echo $check;
















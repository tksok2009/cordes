<?php

// input
$input_payments = trim(fgets(STDIN));

// pattern init
// 500 100 50 10 5 1
$pattern_array = [];
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
		SumCheck($array,$check);
}

/**
*
* @return Int payout
*
*/
function SumCheck($array,&$check){

$sum = 0;
//$input_payments;

do {
$ck = 0;

if($ck < 1){
$sum += $entype['500en'] * 500;
$ck = PaymentsCheck($sum,$check);
}

if($ck < 1){
$sum += $entype['100en'] * 100;
PaymentsCheck($sum,$check);
}

if($ck < 1){
$sum += $entype['50en'] * 50;
$ck = PaymentsCheck($sum,$check);
}

if($ck < 1){
$sum += $entype['10en'] * 10;
$ck = PaymentsCheck($sum,$check);
}

if($ck < 1){
$sum += $entype['5en'] * 5;
$ck = PaymentsCheck($sum,$check);
}

if($ck < 1){
$sum += $entype['1en'] * 1;
$ck = PaymentsCheck($sum,$check);
}

if($ck == 0){
	$ck = 2;
}

} while ($ck >= 2);


}



function PaymentsCheck($sum,&$check){

	if($sum == $input_payments){

		$check = $check + 1;
		return 1;

	} else if($sum < $input_payments){

		return 1;

	} else {

		return 0;

	}

}


echo $check;
















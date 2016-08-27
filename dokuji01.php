<?php

$input_payments = trim(fgets(STDIN));

// 
$itinokurai =substr($input_payments, -1);

if($itinokurai == 0){
}elseif($itinokurai <= 4){
$input_payments = floor($input_payments/10) * 10;
}elseif($itinokurai <= 9){
$input_payments = floor($input_payments/10) * 10 + 5;
}









$PatterArray = [];
for ($en500 = 0; $en500 <= 1 ; $en500++) {
for ($en100 = 0; $en100 <= 1 ; $en100++) {
for ($en50 = 0; $en50 <= 1 ; $en50++) {
for ($en10 = 0; $en10 <= 1 ; $en10++) {
for ($en5 = 0; $en5 <= 1 ; $en5++) {
for ($en1 = 0; $en1 <= 1 ; $en1++) {

$sum = $en500*500 + $en100*100 + $en50*50 + $en10*10 + $en5*5 + $en1*1;

$PatterArray[] = ['500en'=>$en500,'100en'=>$en100,'50en'=>$en50,'10en'=>$en10,'5en'=>$en5,'1en'=>$en1,
'sum' => $sum];

}
}
}
}
}
}






$check = 0;
foreach ($PatterArray as $value) {

	if($input_payments >= $value['sum']){

	
		//$sum = $en500*500 + $en100*100 + $en50*50 + $en10*10 + $en5*5 + $en1*1;


		if($input_payments <= 4){

			$check = 1;

		}else{

			if($input_payments == $value['sum']){

			$check = $check + 1;
		
			}else{

				if($value['5en'] != 0){

					$entypepatterns = floor(($input_payments - $value['sum']) / 5);
					$check = $check + $entypepatterns;

						if(($entypepatterns == 0 ) and ($value['1en'] != 0)){
						$check = $check + 1;
						} 


				}else if($value['10en'] != 0){

					$entypepatterns = floor(($input_payments - $value['sum'] ) / 10);
					$check = $check + $entypepatterns;

						if(($entypepatterns == 0 ) and ($value['1en'] != 0)){
						$check = $check + 1;
						} 


				}else if($value['1en'] != 0){
					$check = $check + 1;
				} //end if



			}
		}


	} // end if 
}

echo $check;












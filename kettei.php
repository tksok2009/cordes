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
for($i10=0;$i10<=1;$i10++){
//for($i50=0;$i50<=1;$i50++){
//for($i100=0;$i100<=1;$i100++){
//for($i500=0;$i500<=1;$i500++){
	//$pattern_arary[] = ['500en'=> $i500,'100en'=>$i100,'50en'=>$i50,'10en'=>$i10,'5en'=>$i5,'1en'=>$i1];
	$pattern_arary[] = ['10en'=>$i10,'5en'=>$i5,'1en'=>$i1];
//}
//}
//}
}
}
}
print_r($pattern_arary);







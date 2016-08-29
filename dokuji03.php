<?php
//
$input_payments = trim(fgets(STDIN));
//$n = trim(fgets(STDIN));

//20
//
$r = 0;


$n = floor($input_payments / 5);


for ($i=0; $i < $n ; $i=$i+2) {

	fn($n-$i,$r);

}



function fn($n=0,&$r=null){

if($n==0){
$r = $r + 1;
return 0;}


$r = $r + $n;		
		$n = $n-1;

print_r($r);

fn($n,$r);
}





echo $r;


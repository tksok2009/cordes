<?php
//
$input_payments = trim(fgets(STDIN));
//$n = trim(fgets(STDIN));
$r = 0;

// 20 /5 = 4
$n = floor($input_payments / 5);



for ($i=0; $i <= $n ; $i=$i+2) {

$ck = $n-$i; // 4 - 0 = 0/ 4 -2 = 2 / 4-4 = 0 

//print_r($ck . " ");

//if($ck == 2){ $r = $r + 1; }

fn($ck,$r);

}




function fn($n=0,&$r=null){

if($n== -1){
return 0;
}else{

$r = $r + 1;		
print_r($n . " ");

		$n = $n-1;


fn($n,$r);
}

}










if($input_payments>=50){
// 10 -> 50 logic
$n = floor(($input_payments - 50)/5);

for ($i=0; $i <= $n ; $i=$i+2) {
$ck = $n-$i;
fn($ck,$r);

}
}





if($input_payments>=100){
// 10 -> 50 logic
$n = floor($input_payments / 50);

for ($i=0; $i <= $n ; $i=$i+2) {
$ck = $n-$i;
fn($ck,$r);

}
}







// ---------------------





echo $r;


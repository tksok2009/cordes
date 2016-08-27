<?php
$ip = trim(fgets(STDIN));


$range = 5;
$array = [];


Rep($range,5,$array);




function Rep($range,$n=0,&$array){

	if($n<0){ return 0;}

	//array_push($array,$n); 
	echo $n;

	Rep($range,$n-1,$array);

}

print_r($array);












<?php
//
$input_payments = trim(fgets(STDIN));
$r = 0;


// 1 to 1
$r = 1;

//
$en1 = 0;


// 1のくらいにあまりがある状態での１０のくらいへ渡せる限界数
$n = floor($input_payments / 5); 
fn($n,$r,5,$en);



function fn($n=0,&$r=null,$z,&$en1){
	if($n < 1){
		return 0;
	}else{

			$r = $r + 1;		
			print_r($n . " ");

			$en1 = $en1 + 1;


				/*
				if($en1 >= 2){
					$r = $r + 1;		
					print_r( " en5 ".PHP_EOL);
				}
				*/


		$n = $n - 1;

		fn($n,$r,$z,$en1);
	}
}










// ---------------------





echo $r;


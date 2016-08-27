<?php
$s = trim(fgets(STDIN));

$res =array();
//$data=array(1, 2, 4, 8, 16);

$data=array(1, 10, 5,);

chk_sum($data,$s,$res);
print_r($res);

function chk_sum($v, $s, &$r, $o=False, $n=0){
  if(!$o){$o=array();}
  if(array_sum($o)==$s){array_push($r,$o);}
//echo array_sum($o)."=".var_export($o,True)."\n";
  $c=count($v);
  for($i=$n; $i<$c; $i++){
    $o[]=$v[$i];
    chk_sum($v, $s, $r, $o, $i+1);
    array_pop($o);
  }
}

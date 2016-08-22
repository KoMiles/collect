<?php
//合并两个数组，并指出他们的异同
$a = array(1=>'one',2=>'two',3=>'three');

$b = array(3=>'three',4=>'four',5=>'five');

//$res = array_merge($a,$b);
//$res = $a+$b;
$res = array_merge_recursive($a,$b);

var_dump($res);

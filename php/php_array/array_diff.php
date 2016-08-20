<?php
//计算数组的差集
$array1 = array("a" => "green", "d"=>"red", "blue","white");
$array2 = array("b" => "green", "yellow", "red");
$result = array_diff($array1,$array2);
print_r($result);

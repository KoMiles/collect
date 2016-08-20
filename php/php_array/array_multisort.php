<?php
//对多维数组进行排序
//array_multisort($arr,SORT_DESC|SORT_ASC)

$fruits = array("a" => "lemon","c" =>  "orange", "b" => "banana","d" =>  "apple","f" => array("d" => 88));
array_multisort($fruits,SORT_DESC);
print_r($fruits);

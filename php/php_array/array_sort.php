<?php
//php数组进行排序
/*
sort //按照值从低到高进行排序，不保持索引关系
asort//按照值从低到高进行排序，并保持索引关系 associative sort
rsort //按照值进行逆向排序，不保持索引关系 reverse sort
arsort //按照值进行逆向排序，并保持索引关系 
ksort //按照键进行排序
krsort //按照键进行逆向排序


*/
$fruits = array("a" => "lemon","c" =>  "orange", "b" => "banana","d" =>  "apple");
ksort($fruits);
print_r($fruits);
echo "\n";
$fruits = array("a" => "lemon","c" =>  "orange", "b" => "banana","d" =>  "apple");
//krsort 按照键进行逆向排序
krsort($fruits);
print_r($fruits);
echo "\n";




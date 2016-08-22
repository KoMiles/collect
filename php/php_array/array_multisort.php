<?php
//对多维数组进行排序
//array_multisort($arr,SORT_DESC|SORT_ASC)

//$fruits = array("a" => "lemon","c" =>  "orange", "b" => "banana","d" =>  "apple","f" => array("d" => 88));
//array_multisort($fruits,SORT_DESC);
//print_r($fruits);
//$a = array(
        //'abc' => array(
            //'id' => 3,
            //'value' => 233,
        //),
        //'zcd' => array(
            //'id' => 2,
            //'value' => 456,
        //),
        //'rcd' => array(
            //'id' => 1,
            //'value' => 4876,
        //)
//);
//array_multisort($a,SORT_ASC);
//print_r($a);
$arr[] = array('name'=>'a','flag'=>1);
$arr[] = array('name'=>'b','flag'=>2);
$arr[] = array('name'=>'a','flag'=>1);
$list = array();
foreach($arr as $v) {
    $list[] = $v['flag'];
}
array_multisort($arr,$list);
print_r($arr);

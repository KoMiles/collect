<?php
//快速排序
$arr = array(18,76,8,28,67,9,1);
function quick_sort($arr) {
    if(count($arr) <= 1) {
        return $arr;
    }
    $flag = $arr[0];
    $len = count($arr);
    $left_arr = $right_arr = array();
    for($i=1;$i<$len;$i++) {
        if($arr[$i] < $flag) {
            $left_arr[] = $arr[$i];
        } else {
            $right_arr[] = $arr[$i];
        }
    }
    $left_arr = quick_sort($left_arr);
    $right_arr = quick_sort($right_arr);
    return array_merge($left_arr,array($flag),$right_arr);
}
$res = quick_sort($arr);
var_dump($res);

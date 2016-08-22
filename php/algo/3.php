<?php
//在一组数中，要求插入一个数
$num = 28;
$arr = array(18,26,38,48,67);
function quick_insert($arr,$num) {
    $len = count($arr);
    if($arr[$len-1] < $len) {
        $arr[$len] = $num;
    }
    for($i=0;$i<$len;$i++) {
        if($arr[$i] >= $num) {
            $t1 = $arr[$i];
            $arr[$i] = $num;
            for($j=$i+1;$j<$len+1;$j++) {
                $t2 = $arr[$j];
                $arr[$j] = $t1;
                $t1 = $t2;
            }
            break;
        }
    }
    return $arr;
}

$res = quick_insert($arr,$num);
var_dump($res);

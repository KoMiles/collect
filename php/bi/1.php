<?php
//排序算法－快速排序
//数字[6 2 4 1 5 9]
$arr = array(6,2,4,1,5,9);

function quick_sort($arr) {
    $len = count($arr);
    if(count($arr) > 1) {
        $left=$right=array();
        $pivot=$arr[0];
        for($i=1;$i<$len;$i++) {
            if($arr[$i] >= $pivot) {
                $right[]=$arr[$i];
            }else{
                $left[]=$arr[$i];
            }
        }
        $left=quick_sort($left);
        //print_r($left);
        $right=quick_sort($right);
        //print_r($right);
        $all = array_merge($left,array($pivot),$right);
        //print_r($all);
        //echo "\n";
        //exit;
        return $all;
    } else {
        return $arr;
    }
}
$res = quick_sort($arr);
echo "end";
print_r($res);

<?php
//排序算法－快速排序
//数字[6 2 4 1 5 9]
$arr = array(6,2,4,7,5,9);

function quick_sort($arr) {
    $len = count($arr);
    if(count($arr) > 1) {
        $left=$right=array();
        $base_num=$arr[0];
        for($i=1;$i<$len;$i++) {
            if($base_num > $arr[$i]) {
                $left[]=$arr[$i];
            }else{
                $right[]=$arr[$i];
            }
        }
        $left=quick_sort($left);
        $right=quick_sort($right);
        $all = array_merge($left,array($base_num),$right);
        return $all;
    } else {
        return $arr;
    }
}
$res = quick_sort($arr);
echo "排序后的数据：";
print_r($res);
echo "end";

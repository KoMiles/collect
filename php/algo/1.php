<?php
//冒泡算法
$arr = array(18,76,8,28,67,9,1);

$len = count($arr);

echo "----\n";

for($i=0;$i<$len;$i++) {
    for($j=$i;$j<$len;$j++) {
        if($arr[$i] > $arr[$j]) {//交换位置
            $tmp = $arr[$i];
            $arr[$i] = $arr[$j];
            $arr[$j] = $tmp;
        }
    }
}
var_dump($arr);

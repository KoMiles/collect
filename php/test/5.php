<?php
$str = "hello world";
echo strrev($str);
$str = "你好，i am kongming";
echo "\n";

getrev($str);
function getrev($str) {
    $l = strlen($str);
    $res = '';
    for($i=$l;$i>=0;$i--) {
        $s = mb_substr($str,$i,1,"utf-8");
        $res .= $s;
    }

    echo $res;
}

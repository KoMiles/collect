<?php

for($i=0;$i<100;$i++) {
    $res1 = chr($i);
    $i."转换值为：".var_dump($res1)."\t";

    $res = chr($i);
    echo $res."ord为：".ord($res)."\n";
}

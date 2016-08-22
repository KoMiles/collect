<?php
//memcache 分布式算法
//1.余数计算
$key = "app_index_2016_08_20";
echo md5($key);
echo "\n";
$res = hash(sha256,$key);
var_dump($res);
echo "\n";
$res = hash(md5,$key);
var_dump($res);

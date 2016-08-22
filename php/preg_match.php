<?php
$str = "kongming8_90304@163.com";
$pattern = "/^([a-zA-Z0-9\_\.]+)@([0-9a-z])+\.[a-z]{2,3}*$/";
$res = preg_match($pattern,$str);
var_dump($res);

$pattern = "/^\d+\.\d+\.\d+\.\d+$/";


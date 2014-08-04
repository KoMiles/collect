<?php
include('pinyin.inc.php');
$name = '少年强，中国强';
$str = pinyin($name);
var_dump($str);
?>

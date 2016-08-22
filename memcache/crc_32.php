<?php
//通过一个字符串的key，计算唯一的hashcode
//crc32
$checksum = crc32("The quick brown fox jumped over the lazy dog.");

printf("%u\n", $checksum);
echo "\n";
//范围:00-63
function crc_hash(&$keyword,$n=64)
{
    $hash = crc32($keyword) >> 16 & 0xffff;
    return sprintf("%02s",$hash % $n);
}
$res = crc_hash($checksum);
var_dump($res);
?>

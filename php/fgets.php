<?php
#文件作用：fgets读取文件

$start_time = microtime(true);
$file_name = "a.txt";
$handle = fopen($file_name,'r');
$i = 0;
if($handle)
{
    while (!feof($handle)) {
        $line = fgets($handle);
        $line = str_replace("\n","",$line);
    }
}

$end_time =  microtime(true);
echo "程序耗时:".round($end_time-$start_time,3)."秒\n";

<?php
$activity_id = isset($argv[1]) ? $argv[1] : 0;
$file_name = isset($argv[2]) ? $argv[2] : "";-
    if(empty($activity_id) || empty($file_name)) {
        echo "parame is error~!";
        exit;
    }
$file = new SplFileObject($file_name);
    $sql = "insert into  {$table} (`user_id`,`activity_id`,`is_read`,`create_ts`,`update_ts`) values ";
    for($i=$start;$i<$limit;$i++) {
        $file->seek($i);
        $sql .= "({$file->current()},{$activity_id},0,{$now_time},{$now_time}),";
    }         
    $sql = substr($sql,0,strlen($sql) -1);
    echo $sql;
}    
exit;                            
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
-              
    $end_time =  microtime(true);
echo "程序耗时:".round($end_time-$start_time,3)."秒\n";

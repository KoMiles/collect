<?php
$start_time = microtime(true);
const HOST = '127.0.0.1';
const USER = 'root';
const PWD = '123456';
const DB = 'test';
include("db/mysql_db.php");

$db  = db_mysql::getInstanct();
//$sql = "insert into User (`user_id`,`activity_id`,`is_read`) values (200,10,10)";
//$re = db_mysql::getInstanct() -> insert($sql);
//var_dump($re);exit;
$file_name = ("file/a.txt");
$activity_id = 22;
$file = new SplFileObject($file_name);
$table = "User";
$now_time = time();
$max_length = 800000;
$start = 0;
$limit = 1000;
while ($start < $max_length) {
    $sql = "insert into  {$table} (`user_id`,`activity_id`,`is_read`,`create_ts`,`update_ts`) values ";
    for($i=$start;$i<= $limit+$start;$i++) {
        if($file -> eof()) {
            continue;
        }
        $file->seek($i);
        //str_replace('u','',$file->current());
        $sql .= "('{$file->current()}',{$activity_id},0,{$now_time},{$now_time}),";
    }

    $sql = substr($sql,0,strlen($sql) -1);
    $start += $limit;
    $result = $db -> insert($sql);
    echo "{$result}\t插入到第{$i}条数据\n";
    continue;
}
$end_time =  microtime(true);
echo "程序耗时:".round($end_time-$start_time,3)."秒\n";
exit;

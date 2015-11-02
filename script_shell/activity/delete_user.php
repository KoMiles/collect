<?php
#文件作用：删除数据库user_id
require_once('/var/www/baby/base_path.php');
 
global $base_path;    
$db;
$activity_id = isset($argv[1]) ? $argv[1] : 0;
     
if(empty($activity_id) ) {     
    echo "parame is error~!";    
    exit;    
}     
     
$num = 0;    
$limit = 2000;
     
do{     
    $sql = "";
    $list = $db->getAll($sql, DBConnector::BACKUP);
    foreach($list as $k => $row) {     
        $_user_id = $row['user_id'];   
        $_is_read= $row['is_read'];   
        if($_user_id <= 0) {     
            continue;    
        }     
        usleep(100);
        echo "user_id:{$_user_id}\tis_read:{$_is_read}\n";
    }
}while(count($list) == 2000);

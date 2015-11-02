<?php
require_once('/var/www/baby/base_path.php');

global $base_path;
$db = "";
$activity_id = isset($argv[1]) ? $argv[1] : 0;
$file_name = isset($argv[2]) ? $argv[2] : ""; 
if(empty($activity_id) || empty($file_name)) {
    echo "parame is error~!";
    exit;
}
$result = file_get_contents($file_name);
$uid_list = explode("\n",$result);
$activity_app_index_user_handle = new ActivityAppIndexUserHandler();
$num = 0;
foreach($uid_list as $k => $_uid) {
    $_uid = trim($_uid);
    $_user_id = UIDEncoder::decode($_uid);
    $result = $activity_app_index_user_handle -> replace($activity_id, $_user_id);
    if($result) {
        $num ++; 
    }
    usleep(10);
    echo "正在插入第{$k}条数据\n";
}
$total_user = count($uid_list);
echo $msg = "一共执行了{$total_user}条记录，成功了{$num}个！";

<?php
#文件作用：读取文件，并入库
require_once('/var/www/baby/base_path.php');

global $base_path;
$db = new DbCommander(new BabytreeDbConnector());

//第一种方式
//循环读取文件　26_00.txt　26_01.txt 26_02.txt
$pre_filename = "27_0";
for($i=0;$i<3; $i++){
    $file_name = $pre_filename.$i.".txt";
    if(!file_exists($file_name)) {
        echo "文件不存在，请检查!\n";
        continue;
    }
    $result = file_get_contents($file_name);
    if(empty($result)) {
        continue;
    }
    $uid_list = explode("\n",$result);

    $num = 0;
    foreach($uid_list as $k => $_uid) {
        $_uid = trim($_uid);
        $_user_id = UIDEncoder::decode($_uid);

        /*在这里写业务

        */

        if($result) {
            $num ++;
        }
        usleep(100);
        echo "正在插入第{$k}条数据\n";
    }
    $total_user = count($uid_list);
    echo $msg = "一共执行了{$total_user}条记录，成功了{$num}个！\n";
    usleep(1000);
}

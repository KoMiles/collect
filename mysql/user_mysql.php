<?php
/*=============================================================================
#     FileName: user_mysql.php
#         Desc: 循环插入表数据
#       Author: wangkongming
#        Email: komiles@163.com
#     HomePage: http://www.wangkongming.cn/
#      Version: 0.0.1
#   LastChange: 2015-05-20 18:56:48
#      History:
=============================================================================*/
// 配置数据库
$database = array();
$database['DB_HOST'] = '127.0.0.1';
$database['DB_NAME'] = 'test';
$database['DB_USER'] = 'root';
$database['DB_PWD'] = '123456';

$mysql_conn = mysql_connect("{$database['DB_HOST']}", "{$database['DB_USER']}", "{$database['DB_PWD']}") or die("Mysql connect is error.");

mysql_select_db($database['DB_NAME'], $mysql_conn);

$result = mysql_query('show tables', $mysql_conn);

mysql_query('SET NAME latin1', $mysql_conn); 
$len = (int)$argv[1];
if(empty($len)) {
    echo "参数有误!";
}

$num = 0;
$false_num = 0;
for($i=0; $i<$len; $i++) {

    $email = "wangkongming{$i}@163.com";
    $sql = "insert into User set email='{$email}'";
    $re = mysql_query($sql, $mysql_conn);
    if($re){
        echo "正在插入第{$i}条数据，插入成功\n";
        $num++;
    } else {
        $false_num++;
        echo "####第{$i}条数据，插入失败####\n";
    }
}
echo "执行结果:\n"."成功：".$num."\n失败：".$false_num;
mysql_close($mysql_conn);

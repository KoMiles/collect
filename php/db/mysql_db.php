<?php
/**
 *  mysql链接数据库
 */
class db_mysql {
    private static $instance = null;
    //初始化
    public function __construct($host,$user,$pwd,$db) {
        $conn  = mysql_connect($host,$user,$pwd);
        mysql_select_db($db, $conn);
        return $conn;
    }

    public function getRow($sql) {
        $result = mysql_query($sql);
        return mysql_fetch_assoc($result);
    }
    public function getAll($sql) {
        $res = array();
        $result = mysql_query($sql);
        while($row = mysql_fetch_assoc($result)){
            $res[] = $row;
        }
        return $res;
    }
    public static function getInstanct() {
        if(self::$instance === null) {
            self::$instance = new db_mysql(HOST,USER,PWD,DB);
        }
        return self::$instance;
    }
    public function insert($sql) {
        $result = mysql_query($sql);
        return $result;
    }
}

//$sql = "select * from User";
//$re = db_mysql::getInstanct() -> getRow($sql);
//$re = db_mysql::getInstanct() -> getAll($sql);
//$sql = "insert into User (`user_id`,`activity_id`,`is_read`) values (19,10,10)";
//$re = db_mysql::getInstanct() -> insert($sql);
//var_dump($re);exit;



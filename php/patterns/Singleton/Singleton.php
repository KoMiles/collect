<?php
/**
 * 单例模式
 * Created by PhpStorm.
 * User: kongming
 * Date: 17/3/14
 * Time: 23:07
 */
//namespace patterns\Singleton;

class Singleton
{
    private static $_instance = null;

    private function __construct()
    {

    }

    public static function getInstanceBak()
    {
        if(self::$_instance === null) {
            self::$_instance = new static();
        }
        return self::$_instance;
    }

    public static function getInstance()
    {
        // instanceof 用于确定一个 PHP 变量是否属于某一类 class 的实例
        if(!self::$_instance instanceof self) {
            self::$_instance = new self;
        }
        return self::$_instance;
    }

    public function getTest()
    {
        echo "this is test";
    }
}




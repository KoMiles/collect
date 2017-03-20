<?php
/**
 * 单例模式
 * Created by PhpStorm.
 * User: kongming
 * Date: 17/3/14
 * Time: 23:07
 */
namespace Singleton;

class Singleton
{
    /**
     * @var null
     */
    private static $_instance = null;

    /**
     * 初始化
     * Singleton constructor.
     */
    private function __construct()
    {

    }

    /**
     * 单例模式对外入口
     * @return null|Singleton
     */
    public static function getInstance()
    {
        // instanceof 用于确定一个 PHP 变量是否属于某一类 class 的实例
        if(!self::$_instance instanceof self) {
            self::$_instance = new self;
        }
        return self::$_instance;
    }

    /**
     * 对外测试方法
     */
    public function getTest()
    {
        echo "this is test";
    }
}




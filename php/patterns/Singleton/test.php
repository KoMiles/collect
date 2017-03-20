<?php
/**
 * 单例模式
 * Created by PhpStorm.
 * User: kongming
 * Date: 17/3/14
 * Time: 23:14
 */
include ('../global.php');

$oFirstCall = \Singleton\Singleton::getInstance();
$oFirstCall -> getTest();

// result "this is test";
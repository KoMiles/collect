<?php

/**
 * 单例模式
 * Created by PhpStorm.
 * User: kongming
 * Date: 17/3/14
 * Time: 23:14
 */
//namespace patterns\Singleton;
include ('Singleton.php');


$oFirstCall = Singleton::getInstance();

$oFirstCall -> getTest();
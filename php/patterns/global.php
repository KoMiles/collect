<?php

/**
 * Created by PhpStorm.
 * User: kongming
 * Date: 17/3/20
 * Time: 22:35
 */
spl_autoload_register('my_autoload');
function my_autoload($class){
    $class = str_replace('\\', '/', $class);
    include dirname($_SERVER['SCRIPT_FILENAME']).'/../'.$class.'.php';
}
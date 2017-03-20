<?php

/**
 * Created by PhpStorm.
 * User: kongming
 * Date: 17/3/20
 * Time: 22:58
 */
include_once './study.php';
class teacher
{
    public function __construct(Study $option)
    {
        echo $option -> getName();
    }
}

//$oPerson = new teacher(new Study);


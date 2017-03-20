<?php

/**
 * Created by PhpStorm.
 * User: kongming
 * Date: 17/3/20
 * Time: 22:57
 */
class Study
{
    private $name = 'zhangsan';

    public function getName()
    {
        return $this -> name;
    }
}

$oStudy = new Study();
$oStudy -> getName();
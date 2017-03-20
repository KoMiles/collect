<?php

/**
 * Created by PhpStorm.
 * User: kongming
 * Date: 17/3/20
 * Time: 23:04
 */
//include 'person.php';
include "study.php";
class Life
{
    public $people = [];
    public function addStudyPerson(Study $option)
    {
        $this ->people[] = $option;
    }
}

$oLife = new Life();
$oLife -> addStudyPerson(new Study);
$oLife -> addStudyPerson(new Study);

$oPrivateList = $oLife -> people;
var_dump($oPrivateList);
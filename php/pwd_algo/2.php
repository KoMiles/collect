<?php
$key = 'daydayup';
//$rs = hash('sha256', $key);
$rs = hash('md5', $key);
var_dump($rs);

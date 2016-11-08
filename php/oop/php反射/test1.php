<?php
$aKeys = array(
    'type', 'name', 'pos', 'style', 'title', 'sub_title', 'bg_color'
);
$aParams = array(
    'name' => '111',
    'type' => 'index',
    'type1' => 'index1',

);
$keys = array_intersect_key($aParams,array_flip($aKeys));
var_dump($keys);


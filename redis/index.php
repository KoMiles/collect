<?php
//Connecting to Redis server on localhost
$redis = new Redis();
$redis->connect('127.0.0.1', 6379);
echo "Connection to server sucessfully\n";
//check whether server is running or not
$ping = $redis->ping();
echo "Server is running: ".$ping;
?>

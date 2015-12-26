<?php
//Connecting to Redis server on localhost
$redis = new Redis();
$redis->connect('127.0.0.1', 6379);
echo "Connection to server sucessfully\n";
//set the data in redis string
$redis->set("tutorial-name", "Redis tutorial");
// Get the stored data and print it
$name = $redis->get("tutorial-name");
echo "Stored string in redis:: ".$name;
?>

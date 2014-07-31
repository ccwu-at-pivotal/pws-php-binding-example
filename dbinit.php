<?php

$vcap = json_decode(getenv("VCAP_SERVICES"),true);
$host = $vcap["cleardb"][0]["credentials"]["hostname"];
$user = $vcap["cleardb"][0]["credentials"]["username"];
$password = $vcap["cleardb"][0]["credentials"]["password"];
$database = $vcap["cleardb"][0]["credentials"]["name"];

$mysqli = new mysqli($host, $user, $password, $database);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error; } 
?>

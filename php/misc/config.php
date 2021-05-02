<?php

session_start();

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "sneaker";

$connection = mysqli_connect($hostname, $username, $password, $dbname);
if(!$connection){
    echo "Database connection error".mysqli_connect_error();
}

$connection->set_charset("utf8");

?>

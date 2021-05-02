<?php

require "misc/config.php";

$fname = mysqli_real_escape_string($connection, $_POST["fname"]);
$lname = mysqli_real_escape_string($connection, $_POST["lname"]);
$name = $fname .  " " . $lname;
$pnumber = mysqli_real_escape_string($connection, $_POST["phoneNumber"]);
$odate = date("Y-m-d h:i:sa");
$ptime = date("H:i", strtotime(mysqli_real_escape_string($connection, $_POST["orderPickupTime"])));

$SQL= "INSERT INTO `sneaker`.orders (phoneNumber, userName, orderDate, orderPickupTime) VALUES ('$pnumber','$name','$odate','$ptime')";

if ($connection->query($SQL) === TRUE) {
    header('location: ../order-confirmation.php');
} else {
    echo "Error: " . $SQL . "<br>" . $connection->error;
}
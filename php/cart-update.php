<?php

$productName = $_POST["name"];

$file = '../php/cart-items.txt';
$pnameVar = file_get_contents($file);
$pnameVar .= $productName . ",";
file_put_contents($file, $pnameVar, $pnameSep);

?>
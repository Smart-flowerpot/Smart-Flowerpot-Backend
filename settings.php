<?php

$host = "localhost"; // Sunucu adresi
$username = "***";
$password = "***";
$database = "***";

$connect = mysqli_connect($host, $username, $password, $database);

if($connect) {
//	echo("Successful connection"."</br>");
}
else {

//	echo("Connection failed"."</br>");
}

?>
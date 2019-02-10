<?php
include("settings.php");

$light = $_REQUEST["light"];
$temperature = $_REQUEST["temperature"];
$moisture_air = $_REQUEST["moisture_air"];
$moisture_soil = $_REQUEST["moisture_soil"];
$water = $_REQUEST["frostbite"];
$water = $_REQUEST["water"];
$name = $_REQUEST["name"];
$type = $_REQUEST["type"];

$add = mysqli_query($connect, "insert into plants (light,temperature,moisture_air,moisture_soil,frostbite, water,name,type) values ('$light','$temperature','$moisture_air', '$moisture_soil', '$frostbite', '$water', '$name', '$type')");

if($add) {
    $x = array('result' => 'S');
    echo json_encode($x);
}
else {
    $x = array('result' => 'F');
    echo json_encode($x);
}


?>
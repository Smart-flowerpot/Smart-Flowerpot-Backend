<?php
include("settings.php");

$id = $_REQUEST["plant_id"];
$light = $_REQUEST["light"];
$temperature = $_REQUEST["temperature"];
$moisture_air = $_REQUEST["moisture_air"];
$moisture_soil = $_REQUEST["moisture_soil"];
$frostbite = $_REQUEST["frostbite"];
$water = $_REQUEST["water"];
$name = $_REQUEST["name"];
$type = $_REQUEST["type"];

$check = mysqli_query($connect, "update `plants` set `name`='$name', `type`='$type', `temperature`='$temperature', `moisture_air`='$moisture_air', `moisture_soil` ='$moisture_soil', `frostbite`='$frostbite', `water`='$water', `light`='$light' where `plant_id`='$id'");

if($check) {
    $x = array('result' => 'S');
    echo json_encode($x);
}
else {
    $x = array('result' => 'F');
    echo json_encode($x);
}

?>
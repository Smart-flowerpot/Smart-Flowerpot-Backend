<?php
include("settings.php");

$id = $_REQUEST["plant_id"];
$water = $_REQUEST["water"];


$check = mysqli_query($connect, "update `plants` set `water`='$water' where `plant_id`='$id'");

if($check) {
    $x = array('result' => 'S');
    echo json_encode($x);
}
else {
    $x = array('result' => 'F');
    echo json_encode($x);
}

?>
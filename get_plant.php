<?php
include("settings.php");

$id = $_REQUEST["id"];

Class Plant {
   public $plant_id;
   public $name;
   public $type;
   public $light;
   public $temperature;
   public $moisture_air;
      public $moisture_soil;
   public $frostbite;
   public $water;
}

$plant = new Plant();

$check = mysqli_fetch_assoc(mysqli_query($connect, "select * from plants where plant_id='$id'"));


$plant->plant_id = $check["plant_id"];
$plant->name = $check["name"];
$plant->type = $check["type"];
$plant->light = $check["light"];
$plant->temperature = $check["temperature"];
$plant->moisture_air = $check["moisture_air"];
$plant->moisture_soil = $check["moisture_soil"];
$plant->frostbite = $check["frostbite"];
$plant->water = $check["water"];

echo(json_encode($plant));





?>
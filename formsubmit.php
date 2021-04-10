<?php

require 'Automobile.php';
$licence_plate = $_POST['licence_plate'];
$brand = $_POST['brand'];
$model = $_POST['model'];
$model_year = $_POST['model_year'];
$color = $_POST['color'];
$example = new Automobile($licence_plate, $brand, $model, $model_year, $color);

echo $example->__toString();


?>
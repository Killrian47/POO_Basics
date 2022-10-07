<?php

require_once 'class.php';
$blackBike = new Bicycle('black');
var_dump($blackBike);
$blackBike->forward();
var_dump($blackBike);

$newCar = new Cars('blue', '5', 'SP95');
var_dump($newCar);

echo $newCar->start();
echo '<br> Vitesse de la voiture : ' . $newCar->currentSpeed . ' km/h' . '<br>';
echo $newCar->forward();
echo '<br> Vitesse du vélo : ' . $newCar->currentSpeed . ' km/h' . '<br>';
echo $newCar->brake();

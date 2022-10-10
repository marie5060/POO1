<?php
// index.php
require_once 'Car.php'; 
require_once 'Bicycle.php';
$bike = new Bicycle('blue');
var_dump($bike);



$bike->setCurrentSpeed(0);
var_dump($bike); // then, another dump.

// Moving bike
echo $bike->forward();

echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

// Instanciation d'un nouvel objet $rockrider
$rockrider = new Bicycle('yellow');
var_dump($rockrider);

// Instanciation d'un nouvel objet $tornado
$tornado = new Bicycle('black');


$tornado->forward();
echo $tornado->setCurrentSpeed(20);

var_dump($bike);
$bike->dump();

$superCar= new Car('blue', 6, "huile de coude");
var_dump($superCar);


echo $superCar->start();

echo $superCar->forward();

echo $superCar->brake();
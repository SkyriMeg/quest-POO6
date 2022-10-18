<?php
require_once './Vehicle.php';
require_once './HighWay.php';
require_once './MotorWay.php';
require_once './PedestrianWay.php';
require_once './ResidentialWay.php';
require 'Bike.php';
require 'Skateboard.php';
require 'Car.php';

//// Tableau currentVehicles vide dans MotorWay ////
$motorWay1 = new MotorWay();

var_dump($motorWay1);


//// Doit s'ajouter au tableau currentVehicles de MotorWay ////
$audi = new Car('red', 4);
$micra = new Car('green', 5);

$motorWay1->addVehicle($audi);
$motorWay1->addVehicle($micra);

var_dump($motorWay1);


//// Ne doit pas s'ajouter au tableau currentVehicles de MotorWay////
$bike1 = new Bike('green', 1);
$skate1 = new Skateboard('blue', 1);


$motorWay1->addVehicle($bike1);
$motorWay1->addVehicle($skate1);

var_dump($motorWay1);



//// TEST avec PedestrianWay ////
$pedestrianWay1 = new PedestrianWay();

var_dump($pedestrianWay1);


$bmw = new Car('red', 4);
$pedestrianWay1->addVehicle($bmw);

$skate2 = new Skateboard('yellow', 1);
$pedestrianWay1->addVehicle($skate2);

var_dump($pedestrianWay1);



//// TEST avec ResidentialWay ////
$ResidentialWay1 = new ResidentialWay();

var_dump($ResidentialWay1);


$ferrari = new Car('red', 2);
$ResidentialWay1->addVehicle($ferrari);

$bike2 = new Bike('violet', 1);
$ResidentialWay1->addVehicle($bike2);

var_dump($ResidentialWay1);

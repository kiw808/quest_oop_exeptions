<?php
require_once 'Bicycle.php';
require_once 'Skateboard.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'MotorWay.php';
require_once 'ResidentialWay.php';
require_once 'PedestrianWay.php';

// Instance of a Car object, parking brake is on by default
$testCar = new Car('yellow', 4, 'fuel');

echo '<h3>Starting</h3><hr>';
// Starting car object
echo $testCar->start();

echo '<br><h3>Restarting</h3><hr>';
// Setting parking brakes of and re-starting
$testCar->setParkBrake('off');
echo $testCar->start();

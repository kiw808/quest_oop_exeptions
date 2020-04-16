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

// Starting car object
try {
    echo $testCar->start() . '</br>';
}
catch (Exception $e) {
    // If park brake is on when starting : park brakes -> off, return exeption message
    $testCar->setParkBrake('off');
    echo $e->getMessage() . '</br>';
} finally {
    echo 'My car is rolling like a donut' . '</br>';
}

// Starting again
try {
    echo $testCar->start() . '</br>';
}
catch (Exception $e) {
    // If park brake is on when starting : park brakes -> off, return exeption message
    $testCar->setParkBrake('off');
    echo $e->getMessage() . '</br>';
} finally {
    echo 'My car is rolling like a donut' . '</br>';
}

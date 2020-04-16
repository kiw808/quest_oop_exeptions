<?php
require_once ('HighWay.php');
// MotorWay.php

final class MotorWay extends HighWay
{
    /**
     * @var int
     */
    protected $nbLanes = 4;

    /**
     * @var int
     */
    protected $maxSpeed = 130;

    public function addVehicle(Vehicle $vehicle)
    {
        $this->setCurrentVehicles($vehicle);
    }
}
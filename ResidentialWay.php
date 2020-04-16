<?php
require_once ('HighWay.php');

final class ResidentialWay extends HighWay
{
    /**
     * @var int
     */
    protected $nbLanes = 2;

    /**
     * @var int
     */
    protected $maxSpeed = 50;

    public function addVehicle(Vehicle $vehicle)
    {
        $this->setCurrentVehicles($vehicle);
    }
}
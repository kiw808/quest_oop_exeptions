<?php
require_once ('HighWay.php');

final class PedestrianWay extends HighWay
{
    const ALLOWED_VEHICLES = [
        Bicycle::class,
        Skateboard::class
    ];

    /**
     * @var int
     */
    protected $nbLanes = 1;

    /**
     * @var int
     */
    protected $maxSpeed = 10;

    public function addVehicle(Vehicle $vehicle)
    {
        // add a vehicle only if its class is in the class constant
        if (in_array(get_class($vehicle), self::ALLOWED_VEHICLES)) {
            $this->setCurrentVehicles($vehicle);
        }
    }
}
<?php

// HighWay.php

abstract class HighWay
{
    /**
     * @var array
     */
    protected $currentVehicles = [];

    /**
     * @var integer
     */
    protected $nbLanes;

    /**
     * @var integer
     */
    protected $maxSpeed;


    public function getCurrentVehicles() : array
    {
        return $this->currentVehicles;
    }

    public function setCurrentVehicles(Vehicle $currentVehicle) : void
    {
        if ($currentVehicle instanceof Vehicle) {
            array_push($this->currentVehicles, $currentVehicle);
        }
    }

    public function getNbLanes() : int
    {
        return $this->nbLanes;
    }

    public function setNbLanes(int $nbLanes) : void
    {
        if ($nbLanes > 0) {
            $this->nbLanes = $nbLanes;
        }
    }

    public function getMaxSpeed() : int
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed(int $maxspeed) : void
    {
        if ($maxspeed >= 0) {
            $this->maxSpeed = $maxspeed;
        }
    }

    abstract public function addVehicle(Vehicle $vehicle);
}
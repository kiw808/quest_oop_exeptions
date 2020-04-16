<?php
require_once 'Vehicle.php';

// Truck.php

class Truck extends Vehicle
{
    // Class constants

    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    // Properties

    /**
     * @var string
     */
    protected $energy;
    /**
     * @var integer
     */
    protected $cargoCapacity;

    /**
     * @var integer
     */
    protected $cargoLoad = 0;

    // Methods

    /**
     * Truck constructor.
     * @param string $color
     * @param int $nbSeats
     * @param string $energy
     * @param int $cargoCapacity
     */
    public function __construct(string $color, int $nbSeats, string $energy, int $cargoCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->cargoCapacity = $cargoCapacity;
    }

    /**
     * Energy getter.
     * @return string
     */
    public function getEnergy() : string
    {
        return $this->energy;
    }

    /**
     * Energy setter.
     * @param string $energy
     * @return Car
     */
    public function setEnergy(string $energy) : Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    /**
     * Cargo capacity getter.
     * @return int
     */
    public function getCargoCapacity()
    {
        return $this->cargoCapacity;
    }

    /**
     * Cargo capacity setter.
     * @param int $cargoCapacity
     */
    public function setCargoCapacity(int $cargoCapacity) : void
    {
        $this->cargoCapacity = $cargoCapacity;
    }

    /**
     * Cargo load getter.
     * @return int
     */
    public function getCargoLoad() : int
    {
        return $this->cargoLoad;
    }

    /**
     * Cargo load setter.
     * @param int $cargoLoad
     */
    public function setCargoLoad(int $cargoLoad) : void
    {
        if (($this->cargoLoad + $cargoLoad) <= $this->cargoCapacity) {
            $this->cargoLoad += $cargoLoad;
        }
    }

    /**
     * How full is the Truck?
     * @return string
     */
    public function howFull() : string
    {
        if ($this->cargoLoad == $this->cargoCapacity) {
            return 'Full';
        }
        else {
            return 'In filling';
        }
    }
}
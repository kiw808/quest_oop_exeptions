<?php
require_once 'Vehicle.php';

// Car.php

class Car extends Vehicle
{
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    //Properties

    /**
     * @var string
     */
    private $energy;

    /**
     * @var integer
     */
    private $energyLevel;

    /**
     * @var boolean
     */
    private $hasParkBrake;

    // Methods

    /**
     * Car constructor.
     * @param string $color
     * @param int $nbSeats
     * @param string $energy
     * @param string $hasParkBrake
     */
    public function __construct(string $color, int $nbSeats, string $energy, string $hasParkBrake = 'on')
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->setParkBrake($hasParkBrake);
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    /**
     * @return string
     */
    public function getParkBrake() : string
    {
        if ($this->hasParkBrake == false) {
            return 'Parking brake is off.';
        }
        else {
            return 'Parking brake is on.';
        }
    }

    /**
     * @param string $set
     * @return string
     */
    public function setParkBrake(string $set) : string
    {
        if ($set == 'on') {
            $this->hasParkBrake = true;
            return 'Parking brake is on.';
        }
        elseif ($set == 'off') {
            $this->hasParkBrake = false;
            return 'Parking brake is off.';
        } else {
            return 'You must enter either on or off as function parameter !';
        }
    }

    public function start() : string
    {
        try {
            echo $this->getParkBrake() . '<br>';
            if ($this->hasParkBrake == true) {
                throw new Exception("ERROR : You're trying to start the car with the parking brakes on !");
            }
        } catch (Exception $e) {
            echo $e->getMessage() .'<br>';
        } finally {
            echo 'My car is rolling like a donut. <br>';
        }

        return 'Engine started.';
    }
}
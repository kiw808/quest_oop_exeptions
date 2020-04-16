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
        if ($this->hasParkBrake == true) {
            throw new Exception("Don't forget the parking brake next time !");
        }
        return 'Engine started.';
    }
}
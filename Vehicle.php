<?php

// Vehicle.php

abstract class Vehicle
{
    // Properties
    /**
     * Vehicle color.
     * @var string
     */
    protected $color;

    /**
     * Vehicle speed.
     * @var integer
     */
    protected $currentSpeed;

    /**
     * Vehicle number of seats.
     * @var integer
     */
    protected $nbSeats;

    /**
     * Vehicle number of wheels.
     * @var integer
     */
    protected $nbWheels;

    // Methods
    /**
     * Vehicle constructor.
     * @param string $color
     * @param int $nbSeats
     */
    public function __construct(string $color, int $nbSeats)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
    }

    /**
     * Vehicle forward.
     * @return string
     */
    public function forward() : string
    {
        $this->currentSpeed = 15;
        return 'Go !';
    }

    /**
     * Vehicle brake.
     * @return string
     */
    public function brake() : string
    {
        $sentence = '';
        while ($this->currentSpeed > 0) {
            $this->currentSpeed --;
            $sentence .= 'Brake !';
        }
        $sentence .= "I'm stopped";
        return $sentence;
    }

    /**
     * Current speed getter.
     * @return int
     */
    public function getCurrentSpeed() : int
    {
        return $this->currentSpeed;
    }

    /**
     * Current speed setter.
     * @param int $currentSpeed
     */
    public function setCurrentSpeed(int $currentSpeed) : void
    {
        if ($this->currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
    }

    /**
     * Color getter.
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * Color setter.
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    /**
     * Number of seats getter.
     * @return int
     */
    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    /**
     * Number of seats setter.
     * @param int $nbSeats
     */
    public function setNbSeats(int $nbSeats): void
    {
        $this->nbSeats = $nbSeats;
    }

    /**
     * Number of wheels getter.
     * @return int
     */
    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    /**
     * Number of wheels setter.
     * @param int $nbWheels
     */
    public function setNbWheels(int $nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }
}
<?php

class Bicycle {
    private string $color;

    public function __construct(string $color)
    {
        $this->color = $color;
    }

    private int $currentSpeed;

    public int $nbSeats = 1;

    public int $nbWheels = 2;

    public function forward(): string
    {
        $this->currentSpeed = 15;

        return "Go !";
    }

    public function dump()
    {
        var_dump($this);
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
    }


};

class Cars {
    public int $numberWheels = 4;

    public int $currentSpeed = 0;

    private string $color;

    private int $numberSeat;

    private string $energy;

    private int $energyLevel;

    public function __construct(string $color, int $numberSeat, string $energy)
    {
        $this->color = $color;
        $this->numberSeat = $numberSeat;
        $this->energy = $energy;
    }

    public function forward(): string {
        $this->currentSpeed = 15;
        return "GOOO !";
    }

    public function brake(): string {
        $sentence= '';
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    public function start(): string {
        $sentence = '';
        while ($this->currentSpeed < 15) {
            $this->currentSpeed++;
            $sentence .= "I start !";
        }
        $sentence .= "I move now !! OMG !";
        return $sentence;
    }

    /**
     * @return int
     */
    public function getNumberWheels(): int
    {
        return $this->numberWheels;
    }

    /**
     * @param int $currentSpeed
     */
    public function getCurrentSpeed(int $currentSpeed): void
    {
        $this->currentSpeed = $currentSpeed;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @return string
     */
    public function getEnergy(): string
    {
        return $this->energy;
    }

    /**
     * @return int
     */
    public function getNumberSeat(): int
    {
        return $this->numberSeat;
    }

    /**
     * @param int $energyLevel
     */
    public function getEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
}

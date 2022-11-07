<?php

class Car extends Vehicle implements LightableInterface
{
    ////////// *** CHALLENGE POO4 *** //////////
    private bool $hasParkBrake = false;

    /**
     * Get the value of hasParkBrake
     */
    // public function getHasParkBrake(): bool
    // {
    //     return $this->hasParkBrake;
    // }

    // public function setHasParkBrake(bool $hasParkBrake): self
    // {
    //     $this->hasParkBrake = $hasParkBrake;
    //     return $this;
    // }

    // public function start(): string
    // {
    //     if ($this->getHasParkBrake()) {
    //         throw new Exception('WARNING ! Park brake is activated !');
    //     }
    //     echo $this->forward(15);
    //     return 'Go ! Drive safe.';
    // }


    ////////// *** CHALLENGE POO5 *** //////////
    private bool $isLightOn = true;


    public function switchOn(): bool
    {
        $this->isLightOn = true;
        return $this->isLightOn;
    }

    public function switchOff(): bool
    {
        $this->isLightOn = false;
        return $this->isLightOn;
    }
}

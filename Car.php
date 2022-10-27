<?php

class Car extends Vehicle
{
    ////////// *** CHALLENGE POO4 *** //////////
    private bool $hasParkBrake = false;

    /**
     * Get the value of hasParkBrake
     */
    public function getHasParkBrake(): bool
    {
        return $this->hasParkBrake;
    }

    public function setHasParkBrake(bool $hasParkBrake): self
    {
        $this->hasParkBrake = $hasParkBrake;
        return $this;
    }

    public function start(): string
    {
        if ($this->getHasParkBrake()) {
            throw new Exception('WARNING ! Park brake is activated !');
        }
        echo $this->forward(15);
        return 'Go ! Drive safe.';
    }
}

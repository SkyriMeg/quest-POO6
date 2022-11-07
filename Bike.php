<?php

class Bike extends Vehicle implements LightableInterface
{
    private bool $isLightOn = false;

    public function switchOn(): bool
    {
        if ($this->currentSpeed > 10) {
            $this->isLightOn = true;
        }
        return $this->isLightOn;
    }

    public function switchOff(): bool
    {
        return $this->isLightOn = false;
    }
}

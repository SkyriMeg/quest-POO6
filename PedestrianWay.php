<?php

require_once './HighWay.php';

final class PedestrianWay extends HighWay
{
    protected int $nbLane = 1;
    protected int $maxSpeed = 10;

    public function addVehicle(Vehicle $vehicle)
    {
        if (($vehicle instanceof Bike) || ($vehicle instanceof Skateboard)) {
            $this->setcurrentVehicles($vehicle);
        }
    }
}

<?php

class Speedometer
{
    public const KM = 1.609;
    public const MILES = 0.6214;

    private int $km;
    private int $miles;

    public static function convertKmToMiles($km): float
    {
        return $km * self::MILES;
    }

    public static function convertMilesToKm($miles): float
    {
        return $miles * self::KM;
    }

    /**
     * Get the value of km
     */
    public function getKm()
    {
        return $this->km;
    }

    /**
     * Set the value of km
     *
     * @return  self
     */
    public function setKm($km)
    {
        $this->km = $km;

        return $this;
    }

    /**
     * Get the value of miles
     */
    public function getMiles()
    {
        return $this->miles;
    }

    /**
     * Set the value of miles
     *
     * @return  self
     */
    public function setMiles($miles)
    {
        $this->miles = $miles;

        return $this;
    }
}

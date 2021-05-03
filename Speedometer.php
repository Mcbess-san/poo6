<?php

class Speedometer 
{
    public const KM_INTO_MILES = 0.621371;
    public const MILES_INTO_KM = 1.60934;

    public static function convertKmToMiles(float $km): float{
        return $km * self::KM_INTO_MILES;
    }

    public static function convertMilesToKm(float $miles): float{
        return $miles * self::MILES_INTO_KM;
    }
}
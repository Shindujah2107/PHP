<?php

include 'carsInterface.php';
include 'eCarInterface.php';

const BR = "<BR>";

class Toyota implements interfaceCars
{

    public function engineType()
    {
        return "Engine: 100HP" . BR;
    }
    public function engineMade()
    {
        return "japan!" . BR;
    }
}

class Nissan implements interfaceCars, electronicCarInterface
{

    public function engineType()
    {
        return "Engine: 130HP" . BR;
    }

    public function engineMade()
    {
        return "germany!" . BR;
    }

    public function batteryType($batterypack)
    {
        return "Battery :" . $batterypack . BR;
    }
}

$nissan = new Nissan();
echo $nissan->engineType();
echo $nissan->batteryType('400000mah');

// $nissan = new Toyota();
// echo $nissan->engineType();

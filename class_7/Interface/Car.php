<?php

require 'VehicleInterface.php';

class Car implements Vehicle
{
    public function start()
    {
        echo 'Car started.';
    }

    public function stop()
    {
        echo 'Car stopped. ';
    }
}

$car = new Car();
$car->start();
$car->stop();

?>
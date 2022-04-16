<?php


namespace App\Principles\OCP\Vehicles;

use App\Principles\OCP\Interfaces\Vehicle as VehicleInterface;
use App\Principles\OCP\Abstracts\Vehicle as VehicleAbstract;


class Ship extends VehicleAbstract implements VehicleInterface
{

    public function move(): string
    {
        return "i am a Ship and i'm floating";
    }
    
}
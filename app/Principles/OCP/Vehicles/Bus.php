<?php

namespace App\Principles\OCP\Vehicles;
use App\Principles\OCP\Abstracts\Vehicle as VehicleAbstract;
use App\Principles\OCP\Interfaces\Move as MoveInterface;



class Bus extends VehicleAbstract 
{
  
    private int $busNumber;
    private int $numberOfPassengers;
    private int $doors;
    

    public function __construct(
  
        int $busNumber,
        int $numberOfPassengers,
        int $doors,
    ) {
        $this->busNumber = $busNumber;
        $this->numberOfPassengers = $numberOfPassengers;
        $this->doors = $doors;
    }

    public function getBusNumber(): int
    {
        return $this->busNumber;
    }

    public function setBusNumber(int $number): void
    {
        $this->busNumber = $number;
    }

    public function getNumberOfPassengers(): int
    {
        return $this->numberOfPassengers;
    }



    public function setNumberOfPassengers(int $numberOfPassengers): void
    {
        $this->numberOfPassengers = $numberOfPassengers;
    }


    public function getDoors(): int
    {
        return $this->doors;
    }


    public function setDoors(int $doors): void
    {
        $this->doors = $doors;
    }





    public function driveToRoute(string $from,string $to)
    {
          return "The Bus is moveing from {$from} to {$to}\n";
    }

    public function doMaintenance()
    {
        return "The bus is doing maintenance and cleaning for 10 minutes before continuing to next trip.\n";
    }




   


}
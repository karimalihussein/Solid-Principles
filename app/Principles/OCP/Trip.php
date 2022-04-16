<?php

namespace App\Principles\OCP;
use App\Principles\OCP\Interfaces\Move as MoveInterface;
use App\Principles\OCP\Interfaces\Vehicle as VehicleInterface;

class Trip
{

    private VehicleInterface $vehicle;
    private int $tripNumber;
    private float $tripPrice;
    private int $duration;


    public function __construct(
        VehicleInterface $vehicle,
        int $tripNumber,
        float $tripPrice,
        int $duration
    ) {
        $this->vehicle = $vehicle;
        $this->tripNumber = $tripNumber;
        $this->tripPrice = $tripPrice;
        $this->duration = $duration;
    }

    public function getVehicle(): VehicleInterface
    {
        return $this->vehicle;
    }

    public function setVehicle(VehicleInterface $vehicle): void
    {
        $this->vehicle = $vehicle;
    }

    public function getTripNumber(): int
    {
        return $this->tripNumber;
    }

    public function getTripPrice(): float
    {
        return $this->tripPrice;
    }

    public function getDuration(): int
    {
        return $this->duration;
    }



    public function setTripNumber(int $tripNumber): void
    {
        $this->tripNumber = $tripNumber;
    }

    public function setTripPrice(float $tripPrice): void
    {
        $this->tripPrice = $tripPrice;
    }

    public function setDuration(int $duration): void
    {
        $this->duration = $duration;
    }

    public function move(): string
    {
       return $this->vehicle->move();
    }




  




    
     
}
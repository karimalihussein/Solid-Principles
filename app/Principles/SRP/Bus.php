<?php

namespace App\Principles\SRP;

class Bus
{

    private int $busNumber;
    private int $numberOfPassengers;
    private string $color;
    private int $maxmumSpeed;

    private int $doors;
    private Route $route;
    private Driver $driver;
    

    public function __construct(
        int $busNumber,
        int $numberOfPassengers,
        string $color,
        string $maxmumSpeed,
        int $doors,
        Route $route,
        Driver $driver
    ) {
        $this->busNumber = $busNumber;
        $this->numberOfPassengers = $numberOfPassengers;
        $this->color = $color;
        $this->maxmumSpeed = $maxmumSpeed;
        $this->doors = $doors;
        $this->route = $route;
        $this->driver = $driver;
    }

    public function getBusNumber(): int
    {
        return $this->busNumber;
    }

    public function getNumberOfPassengers(): int
    {
        return $this->numberOfPassengers;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getMaxmumSpeed(): string
    {
        return $this->maxmumSpeed . 'K/h';
    }



    public function getDoors(): int
    {
        return $this->doors;
    }




    public function setBusNumber(int $number): void
    {
        $this->busNumber = $number;
    }

    public function getDriver(): Driver
    {
        return $this->driver;
    }

    public function getRoute(): Route
    {
        return $this->route;
    }

    public function setDriver(Driver $driver): void
    {
        $this->driver = $driver;
    }

    public function setNumberOfPassengers(int $numberOfPassengers): void
    {
        $this->numberOfPassengers = $numberOfPassengers;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function setMaxmumSpeed(int $maxmumSpeed): void
    {
        $this->maxmumSpeed = $maxmumSpeed;
    }



    public function setDoors(int $doors): void
    {
        $this->doors = $doors;
    }

    public function setRoute(Route $route): void
    {
        $this->route = $route;
    }



    public function driveToRoute($from, $to)
    {
          return "The but is moveing from {$from} to {$to}";
    }

    public function doMaintenance()
    {
        return "The bus is doing maintenance and cleaning right now";
    }


   


}
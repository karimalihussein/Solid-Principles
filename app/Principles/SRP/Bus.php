<?php

namespace App\Principles\SRP;

class Bus
{

    private int $busNumber;
    private int $numberOfPassengers;
    private string $color;
    private int $maxmumSpeed;
    private int $doors;
    private array $routes;
    private Driver $driver;
    

    public function __construct(
        int $busNumber,
        int $numberOfPassengers,
        string $color,
        string $maxmumSpeed,
        int $doors,
        array $routes,
        Driver $driver
    ) {
        $this->busNumber = $busNumber;
        $this->numberOfPassengers = $numberOfPassengers;
        $this->color = $color;
        $this->maxmumSpeed = $maxmumSpeed;
        $this->doors = $doors;
        $this->routes = $routes;
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

    public function getRoutes(): array
    {
        return $this->routes;
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

    public function addRoute(Route $route): void
    {
        $this->routes[] = $route;
    }

    public function setRoutes(array $routes): void
    {
        $this->routes[] = $routes;
    }



    public function driveToRoute(string $from,string $to)
    {
          return "The Bus is moveing from {$from} to {$to}\n";
    }

    public function doMaintenance()
    {
        return "The bus is doing maintenance and cleaning for 10 minutes before continuing to next trip.\n";
    }

    public function move(): string {
        $output = '';
        foreach ($this->getRoutes() as $route) {
          $output .= 
          $this->driveToRoute($route->getSource(), $route->getDestination()) 
          . "with a speed of {$this->getMaxmumSpeed()}\n" 
          ."The Driver Info: {$this->getDriver()->driverInfo()}, "
          .$this->doMaintenance() . "\n"
          ."<hr>";
        }
        return $output;
    }


   


}
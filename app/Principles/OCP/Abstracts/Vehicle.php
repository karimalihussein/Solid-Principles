<?php

namespace App\Principles\OCP\Abstracts;

use App\Principles\OCP\Driver;
use App\Principles\OCP\Route;
use App\Principles\OCP\Interfaces\Move as MoveInterface;
use App\Principles\OCP\Interfaces\Vehicle as VehicleInterFace;


abstract class Vehicle implements VehicleInterFace
{
    private MoveInterface $movable;
    private string $color;
    private int $maxmumSpeed;
    private Driver $driver;
    private array $routes;


    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getMaxmumSpeed(): string
    {
        return $this->maxmumSpeed . 'K/h';
    }

    public function setMaxmumSpeed(int $maxmumSpeed): void
    {
        $this->maxmumSpeed = $maxmumSpeed;
    }

    public function getDriver(): Driver
    {
        return $this->driver;
    }

   
    public function setDriver(Driver $driver): void
    {
        $this->driver = $driver;
    }

    public function getRoutes(): array
    {
        return $this->routes;
    }

    public function setRoutes(array $routes): void
    {
        $this->routes[] = $routes;
    }

    
    public function addRoute(Route $route): void
    {
        $this->routes[] = $route;
    }

    public function getMovable(): MoveInterface
    {
        return $this->movable;
    }

    public function setMovable(MoveInterface $movable): void
    {
        $this->movable = $movable;
    }

    public function move() : string
    {
        return $this->getMovable()->move();
    }













    


}
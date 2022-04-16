<?php

declare(strict_types = 1);

require_once __DIR__ . '/../vendor/autoload.php';

use App\Principles\OCP\Driver;
use App\Principles\OCP\Route;
use App\Principles\OCP\Trip;
use App\Principles\OCP\Vehicles\Bus;

use App\Principles\OCP\Vehicles\Ways\MoveOnRoads;

/*
SRP - Single Responsibility Principle
$driver = new Driver('John',25, 123456789,'London');
$route = new Route('London', 'Manchester', 100);
$route2 = new Route('Manchester', 'Birmingham', 200);
$route3 = new Route('Birmingham', 'West Midlands', 300);
$bus = new Bus(11, 50, 'red', '100', 4,
[$route, $route2, $route3], $driver);
$trip = new Trip($bus,20992,100.50,120);
echo $trip->move();
 */

$driver = new Driver('John', 25, 123456789, 'London');
$route = new Route('London', 'Manchester', 100);
$vehicle = new Bus(2001, 30, 3);
$vehicle->setMovable(new MoveOnRoads());
$trip = new Trip($vehicle, 20992, 100.50, 120);
echo $trip->move();

// $car = new Car();
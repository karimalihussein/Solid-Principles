<?php

declare(strict_types = 1);


require_once __DIR__ . '/../vendor/autoload.php';

use App\Principles\SRP\Bus;
use App\Principles\SRP\Driver;
use App\Principles\SRP\Route;


$driver = new Driver('John',25, 123456789,'London');
$route = new Route('London', 'Manchester', 100);
$route2 = new Route('Manchester', 'Birmingham', 200);
$bus = new Bus(11, 50, 'red', '100', 4,
 [$route, $route2], $driver);

 echo $bus->move();

// $bus->addRoute($route2);
// var_dump($bus);










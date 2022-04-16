<?php

namespace App\Principles\OCP\Vehicles\Ways;

use App\Principles\OCP\Interfaces\Move as MoveInterface;



class MoveOnRoads implements MoveInterface
{

    public function move(): string
    {
        return "i'm moving on the roads";
    }

}
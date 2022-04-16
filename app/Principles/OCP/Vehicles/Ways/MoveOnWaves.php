<?php

namespace App\Principles\OCP\Vehicles\Ways;

use App\Principles\OCP\Interfaces\Move as MoveInterface;


class MoveOnWaves implements MoveInterface
{

    public function move(): string
    {
        return "i'm floating over the waves"; 
    }

}
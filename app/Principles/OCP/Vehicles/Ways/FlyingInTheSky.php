<?php

namespace App\Principles\OCP\Vehicles\Ways;

use App\Principles\OCP\Interfaces\Move as MoveInterface;


class FlyingInTheSky implements MoveInterface
{

    public function move(): string
    {
        return "i'm flying in the sky";
    }

}
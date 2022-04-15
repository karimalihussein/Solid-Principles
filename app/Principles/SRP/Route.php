<?php

namespace App\Principles\SRP;


class Route 
{
    private string $source;
    private string $destination;
    private int $distance;

    public function __construct(
        string $source,
        string $destination,
        int $distance
    ) {
        $this->source = $source;
        $this->destination = $destination;
        $this->distance = $distance;           
    }

    public function getSource(): string
    {
        return $this->source;
    }

    public function getDestination(): string
    {
        return $this->destination;
    }

    public function getDistance(): int
    {
        return $this->distance;
    }

    public function getDuration(): int
    {
        return $this->distance / 10;
    }

    public function setSource(string $source): void
    {
        $this->source = $source;
    }

    public function setDestination(string $destination): void
    {
        $this->destination = $destination;
    }

    public function setDistance(int $distance): void
    {
        $this->distance = $distance;
    }

    
    
     

}
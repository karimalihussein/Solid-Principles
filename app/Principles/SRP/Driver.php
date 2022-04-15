<?php

namespace App\Principles\SRP;


class Driver 
{
     private string $name;
     private int $age;
     private int $insuranceNumber;
     private string $address;


    public function __construct(
        string $name,
        int $age,
        int $insuranceNumber,
        string $address
    ) {
        $this->name = $name;
        $this->age = $age;
        $this->insuranceNumber = $insuranceNumber;
        $this->address = $address;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function getInsuranceNumber(): int
    {
        return $this->insuranceNumber;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    public function setInsuranceNumber(int $insuranceNumber): void
    {
        $this->insuranceNumber = $insuranceNumber;
    }

    public function setAddress(string $address): void
    {
        $this->address = $address;
    }
    

}
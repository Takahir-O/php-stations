<?php

namespace Src\Station14\Question;

class Question
{
    public function main(): void
    {
        $car = new Car();
        Car::getPassenger();
        Car::pickup();
        Car::turnRight_backLeft();

    }
}

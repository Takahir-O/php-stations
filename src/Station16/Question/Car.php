<?php

namespace Src\Station16\Question;

class Car{
    public string $name = '';
    public int $passenger = 0;

    // メソッド
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function run(): void
    {
        echo '走行する';
    }

    public function pickup(int $passenger): int
    {
        $this->passenger = $this->passenger + $passenger;
        return $this->passenger;
    }


}

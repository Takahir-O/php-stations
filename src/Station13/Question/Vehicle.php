<?php

namespace Src\Station13\Question;

class Vehicle
{
    // Vehicleクラスは、name, maxSpeedのプロパティと以下のメソッドを持つ
    protected $name;
    protected $maxSpeed;

    public function run(): void
    {
        echo "アクセルを踏む";
    }

    private function stop(): void
    {
        echo "ブレーキを踏む";
    }

    private function right(): void
    {
        echo "右にハンドルを回す";
    }

    private function left(): void
    {
        echo "左にハンドルを回す";
    }

    public function back(): void
    {
        echo "バックする";
    }

    public static function turnRight(): void
    {
        $vehicle = new static();
        $vehicle->stop();
        $vehicle->right();
        $vehicle->run();
    }

    public static function backLeft(): void
    {
        $vehicle = new static();
        $vehicle->stop();
        $vehicle->left();
        $vehicle->back();
    }
}

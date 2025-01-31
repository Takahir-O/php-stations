<?php

namespace Src\Station14\Question;

class Car extends Vehicle
{
    // 初期値5の定数DOOR
    public const DOOR = 5;

    // $passengerは初期値0のstaticプロパティ
    public static $passenger = 0;

    // $passengerの数をechoで表示するgetPassengerメソッド
    public static function getPassenger()
    {
        echo self::$passenger;
    }

    // $passengerの人数が1増え、getPassengersを実行するpickupメソッド
    public static function pickup()
    {
        self::$passenger++;
        self::getPassenger();
    }

    public static function getDoors()
    {
        echo self::DOOR;
    }

    public static function turnRight_backLeft()
    {
    }
}

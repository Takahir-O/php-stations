<?php

namespace Src\Station16\Practice;

require_once('vendor/autoload.php');

class Practice
{
    public function main(): void
    {
        // ここにサンプルコードを記述
        $dog = new Dog('ポチ');
        $dog->run();
    }
}

(new Practice)->main();

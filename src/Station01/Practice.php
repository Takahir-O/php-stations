<?php

namespace Src\Station01;

class Practice
{
    public function main(): void
    {
        // ここにサンプルコードを記述
        // $a = 'test';
        // echo gettype($a).PHP_EOL;

        $a = 1;
        echo gettype($a) . PHP_EOL;

        // 変数$bに対してboolになるような値を代入してください
        $b = true;
        echo gettype($b) . PHP_EOL;
    }
}

(new Practice())->main();

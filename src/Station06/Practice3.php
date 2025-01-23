<?php

namespace Src\Station06;

class Practice3
{
    public function main(): void
    {
        // ここにサンプルコードを記述
        $array = [1, 2, 3, 4, 5];
        array_splice($array, 0, 3, [6, 7]);
        print_r($array);
    }
}

(new Practice3())->main();

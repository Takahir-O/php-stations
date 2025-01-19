<?php

namespace Src\Station03;

class Practice2
{
    public function main(): void
    {
        // ここにサンプルコードを記述
        $a = 1;
        switch ($a) {
            case $a==='1':
                echo 'aはstring の1です' . PHP_EOL;
                break;
            case $a===1:
                echo 'aはintの1です' . PHP_EOL;
                break;
            default:
                echo '$ahは1ではありません' . PHP_EOL;
        }
    }
}

(new Practice2())->main();

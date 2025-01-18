<?php

namespace Src\Station02;

class Practice
{
    public function main(): void
    {
        // ここにサンプルコードを記述
        $a = 1;
        $b = '1';

        if($a >1){
            echo '$aは1より大きい';
        }else{
            echo '$aは1以下';
        }

        echo PHP_EOL;

        if($a >=$b){
            echo '$aは$b以上';
        } else {
            echo '$aは$b未満';
        }

        echo PHP_EOL;

        if($a == $b){
            echo '$aと$bは等しい';
        } else {
            echo '$aと$bは等しくない';
        }
        echo PHP_EOL;
    }
}

(new Practice())->main();

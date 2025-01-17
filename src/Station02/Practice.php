<?php

namespace Src\Station02;

class Practice
{
    public function main(): void
    {
        // ここにサンプルコードを記述
        $a =1;
        $b = 2;

        if($a >1){
            echo '$aは1より大きい';
        }else{
            echo '$aは1以下';
        }
    }
}

(new Practice())->main();

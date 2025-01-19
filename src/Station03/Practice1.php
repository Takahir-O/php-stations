<?php

namespace Src\Station03;

class Practice1
{
    public function main(): void
    {
        // ここにサンプルコードを記述
        $a = 'bar';
        switch ($a) {
            case 'foo':
                echo '$aはfooです';
                break;
            case'bar':
            case 'baz':
                echo '$aはbarかbazです';
                break;
        }
    }
}

(new Practice1())->main();

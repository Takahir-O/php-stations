<?php

namespace Src\Station06;

class Question
{
    public function main(): array
    {
        // ['red', 'blue', 'yellow'] の要素を持つ添字配列を定義する
        $array = ['red', 'blue', 'yellow'];
        array_splice($array,0,0,['white','black']);
        array_pop($array);
        array_splice($array,3,0,['green']);
        return $array;
    }
}

<?php

namespace Src\Station08;

class Question
{
    public function main(): array
    {
        $array = [
            ['アザラシ','アライグマ'],
            ['ウサギ','ウシ'],
            ['オオカミ','オットセイ']
        ];

        // [1]の要素を['イヌ','イルカ']に変える
        $array[1] = ['イヌ','イルカ'];
        // [2]の要素を['ウサギ','ウシ','ウマ']に変える
        $array[2] = ['ウサギ','ウシ','ウマ'];
        return $array;
    }
}

<?php

namespace Src\Station15\Question;

class Calculator
// 処理内容:
// $multiplieds が空の場合、 false を返す (if 文で処理する)
// $multiplieds が空でない場合、 array_map を用いて $multiplieds 配列内の各数値を $multiplier 倍した新しい配列を返す
{
    public function multiply($multiplieds, $multiplier)
    {
        if (empty($multiplieds)) {
            return false;
        }
        return array_map(function($multiplied) use ($multiplier) {
            return $multiplied * $multiplier;
        }, $multiplieds);
    }
}


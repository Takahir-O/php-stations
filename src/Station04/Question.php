<?php

namespace Src\Station04;

class Question
{
    public function main(): int
    {
        $array = [1, 2, 3, 4, 5, 6, 7, 8, 9];
        $b = 0;
        foreach ($array as $value) {
            // 4以外の4の倍数をチェック
            if ($value % 4 === 0 && $value !== 4) {
                break;
            }
            $b = $b + $value;
        }
        return $b;
    }
}

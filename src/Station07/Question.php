<?php

namespace Src\Station07;

class Question
{
    public function one(): array
    {
        $array1 = ['北海道' => 1, '東京都' => 13, '大阪府' => 27];
        $array2 = ['広島県' => 34, '京都府' => 26];
        $array3 = ['京都府' => 26, '大阪府' => 27];
        $array4 = array_merge($array1,$array2,$array3);
        return $array4;


    }

    public function two(): array
    {
        $firstNames = ['太郎', '次郎', '花子'];
        $lastNames = ['山田', '鈴木', '佐藤'];
        // lastNamesとfirstNamesを結合して、['山田太郎', '鈴木次郎', '佐藤花子']という配列を作成する
        $array = array_map(function($lastNames,$firstNames){
            return $lastNames.$firstNames;
        },$lastNames,$firstNames);
        return $array;
    }

    public function three(): array
    {
        $array = [
            ['name' => 'apple', 'price' => 140],
            ['name' => 'banana', 'price' => 200],
            ['name' => 'orange', 'price' => 120],
        ];

        $array2 = array_column($array,'price','name');
        return $array2;
    }
}

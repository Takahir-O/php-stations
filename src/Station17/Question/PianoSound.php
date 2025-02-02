<?php

namespace Src\Station17\Question;

class PianoSound implements SoundInterface
{
    public const INSTRUMENT_NAME = 'ピアノ';

    public function isValidatedInput(string $scale): bool
    {
        // 「ドレミファソラシ」のどれかかを検証
        $validScales = ['ド', 'レ', 'ミ', 'ファ', 'ソ', 'ラ', 'シ'];
        return in_array($scale, $validScales, true);
    }

    public function sound(string $scale): string
    {
        // "ピアノの" と引数の音名を結合
        return self::INSTRUMENT_NAME . 'の' . $scale;
    }
}

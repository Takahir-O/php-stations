<?php

namespace Src\Station17\Question;

class GuitarSound implements SoundInterface
{
    public const INSTRUMENT_NAME = 'ギター';

    public function isValidatedInput(string $scale): bool
    {
        // 「C D E F G A B」のどれかかを検証
        $validScales = ['C', 'D', 'E', 'F', 'G', 'A', 'B'];
        return in_array($scale, $validScales, true);
    }

    public function sound(string $scale): string
    {
        // エフェクトをかけた音を返す
        return $this->effect($scale);
    }

    private function effect(string $scale): string
    {
        // 「エフェクトをかけた」と楽器名、音名を結合して返す例:
        // 「エフェクトをかけたギターのD」
        return 'エフェクトをかけた' . self::INSTRUMENT_NAME . 'の' . $scale;
    }
}

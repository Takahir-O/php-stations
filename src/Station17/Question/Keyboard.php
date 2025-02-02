<?php

namespace Src\Station17\Question;

class Keyboard
{
    public function play(SoundInterface $sound, string $scale): void
    {
        // 入力が有効でない場合はエラーメッセージを出力
        if (!$sound->isValidatedInput($scale)) {
            echo 'この音を鳴らすことはできません';
            return;
        }

        // 有効な場合は音を鳴らす処理
        echo $sound->sound($scale) . 'を鳴らします';
    }
}

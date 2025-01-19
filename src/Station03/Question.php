<?php

namespace Src\Station03;

class Question
{
    public function main(mixed $arg): string
    {
        // argが1かつintの場合はりんご
        if ($arg === 1 && is_int($arg)) {
            return 'りんご';
        }
        // そうではなく2もしくは3かつintの場合はみかん
        elseif (($arg === 2 || $arg === 3) && is_int($arg)) {
            return 'みかん';
        }
        else {
            return 'さくらんぼ';
        }
    }
}

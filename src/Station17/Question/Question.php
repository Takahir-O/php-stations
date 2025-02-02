<?php

namespace Src\Station17\Question;

class Question
{
    public function main(): void
    {
        $keyboard = new Keyboard();
        $keyboard->play(new PianoSound(), 'ド');
        $keyboard->play(new GuitarSound(), 'C');
    }
}

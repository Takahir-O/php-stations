<?php

namespace Src\Station02;

class Question
{
    public function main(mixed $arg): string
    {
        if (gettype($arg) === 'integer' && $arg === 0) {
            return 'zero';
        }

        if (gettype($arg) === 'string' && $arg === '1') {
            return 'foo';
        }

        if (gettype($arg) === 'integer' && $arg === 1) {
            return 'bar';
        }

        if ((gettype($arg) === 'integer' || gettype($arg) === 'string') && $arg >= 2) {
            return 'baz';
        }

        return 'others';
    }
}

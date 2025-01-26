<?php

namespace Src\Station12\Question;

use Carbon\CarbonImmutable;

class Food extends Product
{
    public function __construct(
        int $originalPrice,
        protected readonly CarbonImmutable $useByDate
    ) {
        parent::__construct($originalPrice);
    }

    public function price(): int
    {
        $now = CarbonImmutable::now();
        $diffInHours = $this->useByDate->diffInHours($now, false);

        if ($diffInHours < 5) {
            return (int)floor($this->originalPrice / 2);
        }

        return $this->originalPrice;
    }
}

<?php

namespace SquareRoot;

class Input
{
    public int $number;
    public int $precision;

    public function __construct($number, $precision)
    {
        $this->number = $number;
        $this->precision = $precision;
    }
    public function getNumber(): float
    {
        return $this->number;
    }
    public function getPrecision(): int
    {
        return $this->precision;
    }
}
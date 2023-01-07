<?php

namespace SquareRoot;

class Calculator extends Input
{
    public function calculate(int $num): float
    {
        return sqrt($num);
    }
}
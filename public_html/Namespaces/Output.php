<?php

namespace SquareRoot;

class Output extends Calculator
{
    public function display($result, $precision): float
    {
        if ($precision === 4) {
            $display = number_format($result, $precision);
        } else {
            $display = $result;
        }
        return $display;
    }
}
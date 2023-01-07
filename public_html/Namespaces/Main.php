<?php

namespace SquareRoot;

use SquareRoot\Input;
use SquareRoot\Calculator;
use SquareRoot\Output;

class Main
{
    public function run($number, $precision): void
    {
        $input = new Input($number, $precision);
        $calculator = new Calculator($number, $precision);
        $output = new Output($number, $precision);
    }
}
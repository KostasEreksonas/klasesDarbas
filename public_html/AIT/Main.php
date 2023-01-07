<?php

namespace Factorial;

use Factorial\FactorialCalculator;

class Main
{
    public function run($num): int
    {
        $result = new FactorialCalculator();
        echo $result->validate($num);
        return $result->calculate($num);
    }
}
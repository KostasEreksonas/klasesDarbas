<?php

namespace Factorial;

use Exception;
use Factorial\Calculator;
use Factorial\Validator;
use Factorial\NumCheck;

class FactorialCalculator implements Calculator, Validator
{
    use positiveNumberChecker;
    public function calculate($num): int
    {
        $sum = 1;
        for ($x = 1; $x <= $num; $x++) {
            $sum *= $x;
        }
        return $sum;
    }
    public function validate($num): string
    {
        if (!$this->check($num)) {
            throw new Exception("Number must be positive");
        }
    }
}
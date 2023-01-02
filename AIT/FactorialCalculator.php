<?php

include 'Calculator.php';
include 'Validator.php';
include 'PositiveNumberChecker.php';
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
        return $this->check($num);
    }
}
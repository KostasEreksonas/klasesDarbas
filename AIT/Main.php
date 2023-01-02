<?php

include 'FactorialCalculator.php';
class Main
{
    public function run($num): int
    {
        $result = new FactorialCalculator();
        echo $result->validate($num);
        return $result->calculate($num);
    }
}
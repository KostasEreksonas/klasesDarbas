<?php

namespace Factorial\NumCheck;

trait positiveNumberChecker
{
    public function check($num): string
    {
        $msg = '';
        if ($num > 0) {
            $msg = 'Skaičius ' . $num . ' yra teigiamas.<br>';
        }
        return $msg;
    }
}
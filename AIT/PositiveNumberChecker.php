<?php
trait positiveNumberChecker
{
    public function check($num): string
    {
        if ($num > 0) {
            return 'Skaičius ' . $num . ' yra teigiamas.<br>';
        }
    }
}
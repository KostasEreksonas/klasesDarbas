<?php

include 'Automobilis.php';

class Kupe extends Automobilis
{
    private bool $atidarytosDurys;

    public function __construct(string $marke, string $modelis, bool $durys)
    {
        parent::__construct($marke, $modelis);
        $this->atidarytosDurys = $durys;
    }

    public function informacija(): string
    {
        $info = parent::informacija();
        if ($this->atidarytosDurys === false) {
            $info .= ', durys uždarytos';
        } else {
            $info .= ', durys atidarytos';
        }
        return $info;
    }
}

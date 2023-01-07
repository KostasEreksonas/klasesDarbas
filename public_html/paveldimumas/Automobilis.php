<?php

class Automobilis
{
    private string $marke;
    private string $modelis;

    public function __construct($marke, $modelis)
    {
        $this->marke = $marke;
        $this->modelis = $modelis;
    }

    public function informacija(): string
    {
        return $this->marke . ' ' . $this->modelis;
    }
}
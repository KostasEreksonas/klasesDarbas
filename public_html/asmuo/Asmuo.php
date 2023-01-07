<?php

class Asmuo
{
    public string $vardas;
    public int $gimimoMetai;

    public function __construct($vardas, $gimimoMetai)
    {
        $this->vardas = $vardas;
        $this->gimimoMetai = $gimimoMetai;
    }

    /**
     * @return string
     */
    public function getVardas(): string
    {
        return $this->vardas;
    }

    public function getMetai(): int
    {
        return $this->gimimoMetai;
    }
}
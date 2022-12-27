<?php

class Car
{
    public string $spalva;
    public string $greitis;
    private float $rida;
    private float $bakas;
    private float $sanaudos;

    public function __construct()
    {
        $this->rida = 0;
        $this->sanaudos = 5;    //Sanaudos 100km
        $this->bakas = 50;
    }

    public function vaziuoti(float $valandos): void
    {
        echo $this->gautiSpalva() . ' automobilis važiuoja ' . $this->greitis . ' greičiu.';
        $this->rida += (int) $this->greitis * $valandos;
    }

    public function gautiSpalva(): string
    {
        return $this->spalva;
    }

    public function gautiRida(): float
    {
        return $this->rida;
    }

    private function kuroSanaudos(int $km): float
    {
        return $this->sanaudos / 100 * $km;
    }

    public function kuroLikutis(int $km): float
    {
        return $this->bakas - $this->kuroSanaudos($km);
    }
}
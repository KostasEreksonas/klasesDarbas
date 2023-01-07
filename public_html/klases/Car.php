<?php

class Car
{
    public string $spalva;
    public string $greitis;
    private float $rida;
    private float $bakas;
    private float $sanaudos;
    private float $darbinisTuris;

    public function __construct()
    {
        $this->rida = 0;
        $this->sanaudos = 5;    //Sanaudos l/100km
        $this->bakas = 50;
        $this->darbinisTuris = 1.9;
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

    public function papildytiBaka(int $litrai): void
    {
        $this->bakas = $litrai;
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
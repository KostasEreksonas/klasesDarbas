<?php

class Grupe
{
    private int $id;
    private string $name;
    private string $code;
    private string $time;
    private string $adresas;
    private int $studentuKiekis;

    public function __construct(int $id, string $name, string $code, string $time, string $adresas, int $studentuKiekis)
    {
        $this->id = $id;
        $this->name = $name;
        $this->code = $code;
        $this->time = $time;
        $this->adresas = $adresas;
        $this->studentuKiekis = $studentuKiekis;
    }
    public function getId(): int
    {
        return $this->id;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function getCode(): string
    {
        return $this->code;
    }
    public function getTime(): string
    {
        return $this->time;
    }
    public function getAdresas(): string
    {
        return $this->adresas;
    }
    public function getStudentuKiekis(): int
    {
        return $this->studentuKiekis;
    }
}
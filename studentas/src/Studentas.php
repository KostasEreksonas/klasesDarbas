<?php

include_once __DIR__ . '/Grupe.php';

class Studentas
{
    private int $id;
    private string $name;
    private string $surname;
    private int $ak;
    private Grupe $grupe;

    public function __construct(int $id, string $name, string $surname, int $ak, Grupe $grupe)
    {
        $this->id = $id;
        $this->name = $name;
        $this->surname = $surname;
        $this->ak = $ak;
        $this->grupe = $grupe;
    }
    public function getId(): int
    {
        return $this->id;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function getSurname(): string
    {
        return $this->surname;
    }
    public function getAk(): int
    {
        return $this->ak;
    }
    public function getGrupe(): Grupe
    {
        return $this->grupe;
    }
    public function getLytis(): string
    {
        $lytis = '';
        $firstNum = (int) substr($this->ak, 0, 1);
        if ($firstNum === 1 || $firstNum === 3 || $firstNum === 5) {
            $lytis = "Vyras";
        } elseif ($firstNum === 2 || $firstNum === 4 || $firstNum === 6) {
            $lytis = "Moteris";
        }
        return $lytis;
    }
    public function getYear(): int
    {
        $metai = '';
        $firstNum = (int) substr($this->ak, 0, 1);
        $yearNum = substr($this->ak, 1, 2);
        if ($firstNum === 1 || $firstNum === 2) {
            $metai = '18' . $yearNum;
        } elseif ($firstNum === 3 || $firstNum === 4) {
            $metai = '19' . $yearNum;
        } elseif ($firstNum === 5 || $firstNum === 6) {
            $metai = '20' . $yearNum;
        }
        return (int) $metai;
    }
    public function getMonth(): int
    {
        return substr($this->ak, 3, 2);
    }
    public function getDay(): int
    {
        return substr($this->ak, 5, 2);
    }
}
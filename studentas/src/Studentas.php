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
}
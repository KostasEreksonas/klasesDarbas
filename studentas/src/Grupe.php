<?php

class Grupe
{
    private int $id;
    private string $name;
    private string $code;
    private string $time;

    public function __construct(int $id, string $name, string $code, string $time)
    {
        $this->id = $id;
        $this->name = $name;
        $this->code = $code;
        $this->time = $time;
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
}
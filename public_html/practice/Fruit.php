<?php

class Fruit
{
    protected string $name;
    protected string $color;

    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    public function intro() {
        echo '<br>The fruit is ' . $this->name . ' and the color is ' . $this->color . '.';
    }
}
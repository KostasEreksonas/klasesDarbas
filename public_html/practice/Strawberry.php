<?php

include 'Fruit.php';

class Strawberry extends Fruit
{
    const LEAVING_MSG = "Goodbye";

    public function message() {
        echo 'Am I a fruit or a berry?';
    }
}
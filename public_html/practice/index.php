<?php

include 'Strawberry.php';

$strawberry = new Strawberry("Strawberry", "red");
$strawberry->message();
$strawberry->intro();
echo $strawberry::LEAVING_MSG;
<?php

include 'Car.php';

$atstumas = 86;
$bakoTalpa = 75;

$bmw = new Car();
$bmw->spalva = 'Raudonas';
$bmw->papildytiBaka($bakoTalpa);
$bmw->greitis = '100 km/h';
$bmw->vaziuoti(1.5);
echo '<br>Rida: ' . $bmw->gautiRida() . ' km.';
echo '<br>Nuvažiavus ' . $atstumas . ' kilometrų, bake liko ' . $bmw->kurolikutis($atstumas) . ' litrų kuro.';

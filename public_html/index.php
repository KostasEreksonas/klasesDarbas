<?php

include 'car.php';

$bmw = new Car();
$bmw->spalva = 'Raudonas';
$bmw->greitis = '100km/h';
$bmw->vaziuoti(5);
echo '<br>Automobilio spalva yra ' . $bmw->gautiSpalva() . '.';
echo '<br>Rida: ' . $bmw->gautiRida() . ' km.';
echo '<hr>';
$audi = new Car();
$audi->spalva = 'Mėlynas';
$audi->greitis = '120km/h';
$audi->vaziuoti(2);
echo '<br>Automobilio spalva yra ' . $audi->gautiSpalva() . '.';
echo '<br>Rida: ' . $audi->gautiRida() . ' km.';
<?php

include 'Main.php';

$print = new Main();
for ($x = 1; $x <= 11; $x++) {
    echo 'Skaičiaus ' . $x . ' faktorialas yra ' . $print->run($x) . '.<br>';
}
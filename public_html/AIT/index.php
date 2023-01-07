<?php

namespace Factorial;

$print = new Main();
try {
    for ($x = 1; $x <= 11; $x++) {
        echo 'Skaičiaus ' . $x . ' faktorialas yra ' . $print->run($x) . '.<br>';
    }
} catch (Exception $e) {
    echo 'Klaida: ' . $e->getMessage();
}
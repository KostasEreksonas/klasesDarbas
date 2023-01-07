<?php

include 'Studentas.php';

$option = isset($_POST['selectStudents']) ? $_POST['selectStudents'] : false;

if ($option === "Vakarinis") {
    echo $option . ' Vakarinis';
} elseif ($option === "Dieninis") {
    echo $option . ' Dieninis';
} else {
    echo gettype($option) . 'Pasirinkite studentų filtravimo sąlygą';
}
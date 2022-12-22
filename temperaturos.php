<?php
function vidutineTemperatura($temp, $len) {
    $sum = 0;
    for ($i = 0; $i < $len; $i++) {
        $sum += $temp[$i];
    }
    $vid = $sum / $len;
    echo 'Vidutinė temperatūra yra ' . $vid . ' pagal farenheitą.<br>';
}

function displayTemp($arr, $val) {
    for ($i = 0; $i < $val; $i++) {
        echo $arr[$i] . '<br>';
    }
}

function maziausiosTemperaturos($temp, $len, $valueCount) { // $valueCount - how many smallest values to store
    $maziausios = [];
    for ($i = 0; $i < $len; $i++) {
        $maziausios[] = $temp[$i];
    }
    $maziausios = array_unique($maziausios);
    sort($maziausios);
    displayTemp($maziausios, $valueCount);
}

function didziausiosTemperaturos($temp, $len, $valueCount) { // $valueCount - how many smallest values to store
    $didziausios = [];
    for ($i = 0; $i < $len; $i++) {
        $didziausios[] = $temp[$i];
    }
    $didziausios = array_unique($didziausios);
    rsort($didziausios);
    displayTemp($didziausios, $valueCount);
}

function konvertuotiTemperatura($temp, $len) {
    $celsijus = [];
    for ($i = 0; $i < $len; $i++) {
        $celsijus[] = (($temp[$i] - 32) * 5) / 9;
        echo $temp[$i] . ' farenheito yra lygu ' . $celsijus[$i] . ' celsijaus<br>';
    }
}

function spausdintiGrafiskai($temp, $len) {
    for ($i = 0; $i < $len; $i++) {
        echo "<div style='height: $temp[$i]px; background-color: gray; display: inline-block; border: 1px solid red;'>$temp[$i]</div>";
    }
    echo '<br>';
}

$temperaturos = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
$length = count($temperaturos);
vidutineTemperatura($temperaturos, $length);

echo 'Mažiausios temperatūros duotame masyve yra:<br>';
maziausiosTemperaturos($temperaturos, $length, 5);

echo 'Didžiausios temperatūros duotame masyve yra:<br>';
didziausiosTemperaturos($temperaturos, $length, 5);

echo 'Temperatūros konvertavimas:<br>';
konvertuotiTemperatura($temperaturos, $length);

spausdintiGrafiskai($temperaturos, $length);

function getLength() {

}

function getElements() {

}

function getShortest($arr, $len) {
    $shortestLength = strlen($arr[0]);
    for ($i = 0; $i < $len; $i++) {
        if (strlen($arr[$i]) < $shortestLength) {
            $shortestLength = strlen($arr[$i]);
        }
    }
    $shortestVals = [];
    for ($i = 0; $i < $len; $i++) {
        if (strlen($arr[$i]) === $shortestLength) {
            $shortestVals[] = $arr[$i];
        }
    }
    echo 'Trumpiausi masyvo elementai yra:<br>';
    for ($j = 0; $j < count($shortestVals); $j++) {
        echo $shortestVals[$j] . '<br>';
    }
}

function getLongest($arr, $len) {
    $longestLength = strlen($arr[0]);
    for ($i = 0; $i < $len; $i++) {
        if (strlen($arr[$i]) > $longestLength) {
            $longestLength = strlen($arr[$i]);
        }
    }
    $longestVals = [];
    for ($i = 0; $i < $len; $i++) {
        if (strlen($arr[$i]) === $longestLength) {
            $longestVals[] = $arr[$i];
        }
    }
    echo 'Ilgiausi masyvo elementai yra:<br>';
    for ($j = 0; $j < count($longestVals); $j++) {
        echo $longestVals[$j] . '<br>';
    }
}

$masyvas = ["abcd", "abc", "de", "hjjj", "g", "wer"];
$ilgis = count($masyvas);
getShortest($masyvas, $ilgis);
getLongest($masyvas, $ilgis);

<?php

function gautiMasyva(array $vardai, array $pavardes, array $map): array
{
    $mapLength = count($map);
    $result = [];
    for ($i = 0; $i < $mapLength; $i++) {
        if ($i % 2 === 0) {
            $result[] = $vardai[$map[$i] - 1];
        } else {
            $result[] = $pavardes[$map[$i] - 1];
        }
    }
    return $result;
}

function spausdintiMasyva(array $vardai, array $pavardes, array $map): void
{
    $count = count(gautiMasyva($vardai, $pavardes, $map));

    for ($i = 0; $i < $count; $i++) {
        if ($i % 2 === 1) {
            echo gautiMasyva($vardai, $pavardes, $map)[$i] . '<br>';
        } else {
            echo gautiMasyva($vardai, $pavardes, $map)[$i] . ' ';
        }
    }
}

$vardai = ["Jonas", "Petras", "Kazys", "Zigmas", "Ona", "Janina", "Kristina"];
$pavardes = ["Joninis", "Petrinis", "Kazinis", "Zigminis", "Onienė", "Jonė", "Kristė"];
$map = [1, 1, 2, 2, 1, 2, 2, 3, 1, 3, 2, 1, 1, 4, 2, 4, 1, 5, 2, 7, 1, 6, 2, 5, 1, 7, 2, 6];

spausdintiMasyva($vardai, $pavardes, $map);

// ----------- PENKTA UŽDUOTIS ----------
function eiluciuSkaicius(array $matrica): int
{
    return count($matrica);
}

function elementuSkaicius(array $matrica): int
{
    return count($matrica);
}

function elementuSuma(array $matrica): int
{
    $suma = 0;
    for ($i = 0; $i < eiluciuSkaicius($matrica); $i++) {
        for ($j = 0; $j < elementuSkaicius($matrica[$i]); $j++) {
            $suma += $matrica[$i][$j];
        }
    }
    return $suma;
}

function spausdintiElementuSuma(array $matrica): void
{
    echo 'Masyve esančių elementų suma yra: ' . elementuSuma($matrica) . '.<br>';
}

function gautiEiluciuVidurkius(array $matrica): array
{
    $eiluciuVidurkiai = [];
    for ($i = 0; $i < eiluciuSkaicius($matrica); $i++) {
        $vidurkis = 0;
        for ($j = 0; $j < elementuSkaicius($matrica[$i]); $j++) {
            $vidurkis += $matrica[$i][$j];
        }
        $vidurkis /= elementuSkaicius($matrica[$i]);
        $eiluciuVidurkiai[] = $vidurkis;
    }
    return $eiluciuVidurkiai;
}

function spausdintiEiluciuVidurkius(array $matrica): void
{
    $vidurkiuSkaicius = count(gautiEiluciuVidurkius($matrica));
    for ($i = 0; $i < $vidurkiuSkaicius; $i++) {
        echo 'Eilutės ' . $i . ' vidurkis yra ' . gautiEiluciuVidurkius($matrica)[$i] . '.<br>';
    }
}

function gautiStulpeliuVidurkius(array $matrica): array
{
    $stulpeliuVidurkiai = [];
    for ($i = 0; $i < eiluciuSkaicius($matrica); $i++) {
        $vidurkis = 0;
        for ($j = 0; $j < elementuSkaicius($matrica[$i]); $j++) {
            $vidurkis += $matrica[$j][$i];
        }
        $vidurkis /= eiluciuSkaicius($matrica);
        $stulpeliuVidurkiai[] = $vidurkis;
    }
    return $stulpeliuVidurkiai;
}

function spausdintiStulpeliuVidurkius(array $matrica): void
{
    $vidurkiuSkaicius = count(gautiStulpeliuVidurkius($matrica));
    for ($i = 0; $i < $vidurkiuSkaicius; $i++) {
        echo 'Stulpelio ' . $i . ' vidurkis yra ' . gautiStulpeliuVidurkius($matrica)[$i] . '.<br>';
    }
}

function gautiVisuElementuVidurkius(array $matrica): int
{
    $vidurkis = 0;
    $elementai = 0;
    for ($i = 0; $i < eiluciuSkaicius($matrica); $i++) {
        for ($j = 0; $j < elementuSkaicius($matrica); $j++) {
            $vidurkis += $matrica[$i][$j];
            $elementai += 1;
        }
    }
    $vidurkis /= $elementai;
    return $vidurkis;
}

function spausdintiVisuElementuVidurkius(array $matrica): void
{
    echo 'Visų elementų vidurkis yra: ' . gautiVisuElementuVidurkius($matrica) . '.';
}

$matrica = [
    [9, 6, 8, 4, 7],
    [4, 8, 9, 3, 1],
    [3, 4, 8, 4, 6],
    [2, 6, 1, 4, 4],
    [7, 7, 5, 8, 2],
];

spausdintiElementuSuma($matrica);
spausdintiEiluciuVidurkius($matrica);
spausdintiStulpeliuVidurkius($matrica);
spausdintiVisuElementuVidurkius($matrica);
<?php

function elementuSkaicius(array $zmones): int
{
    return count($zmones);
}

function lentelesHead(): void
{
    echo '
    <table class="table">
        <thead>
            <tr class="table-primary">
                <th scope="col">ID</th>
                <th scope="col">Vardas</th>
                <th scope="col">Amžius</th>
                <th scope="col">Profesija</th>
            </tr>
        </thead>';
}

function getAmzius(): int
{
    return $_POST['amzius'];
}

function getPareigos(): string
{
    return $_POST['pareigos'];
}

function filtruotiDuomenis(array $zmones): array
{
    $filteredArray = [];
    for ($i = 0; $i < elementuSkaicius($zmones); $i++) {
        if ($zmones[$i]['amzius'] >= getAmzius() && $zmones[$i]['pareigos'] !== getPareigos()) {
            $filteredArray[] = $zmones[$i];
        }
    }
    return $filteredArray;
}

function filtruotuDuomenuSkaicius(array $zmones): int
{
    return count(filtruotiDuomenis($zmones));
}

function irasytiDuomenisPagalAmziu(array $zmones): void
{
    for ($i = 0; $i < filtruotuDuomenuSkaicius($zmones); $i++) {
        echo '<tr>';
        echo '<th scope="row">' . $i + 1 . '</th>';
        foreach (filtruotiDuomenis($zmones)[$i] as $value) {
            echo '<td>' . $value . '</td>';
        }
        echo '</tr>';
    }
}

function atvaizduotiDuomenisPagalAmziu(array $zmones): void
{
    lentelesHead();
    echo '<tbody>';
    irasytiDuomenisPagalAmziu($zmones);
    echo '</tbody></table>';
}

$zmones = [
    ['vardas'=>'Tadas', 'amzius'=>23, 'pareigos'=>'Studentas'],
    ['vardas'=>'Jonas', 'amzius'=>33, 'pareigos'=>'Mechanikas'],
    ['vardas'=>'Gabija', 'amzius'=>27, 'pareigos'=>'Buhalterė'],
    ['vardas'=>'Tomas', 'amzius'=>48, 'pareigos'=>'Santechnikas'],
    ['vardas'=>'Petras', 'amzius'=>37, 'pareigos'=>'Vadybininkas'],
    ['vardas'=>'Ieva', 'amzius'=>21, 'pareigos'=>'Studentė'],
    ['vardas'=>'Kęstutis', 'amzius'=>30, 'pareigos'=>'Programuotojas'],
];

atvaizduotiDuomenisPagalAmziu($zmones);
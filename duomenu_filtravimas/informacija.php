<?php

function elementuSkaicius(array $zmones): int
{
    return count($zmones);
}

function puslapioHead(): void
{
    echo '<head>
    <meta charset="UTF-8">
    <title>Duomenų filtravimas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>';
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

function irasytiDuomenis(array $zmones): void
{
    for ($i = 0; $i < elementuSkaicius($zmones); $i++) {
        echo '<tr>';
        echo '<th scope="row">' . $i + 1 . '</th>';
        foreach ($zmones[$i] as $value) {
            echo '<td>' . $value . '</td>';
        }
        echo '</tr>';
    }
}

function atvaizduotiDuomenis(array $zmones): void
{
    puslapioHead();
    lentelesHead();
    echo '<tbody>';
    irasytiDuomenis($zmones);
    echo '</tbody></table>';
}

function filtruotiDuomenis(array $zmones): array
{
    $filteredArray = [];
    for ($i = 0; $i < elementuSkaicius($zmones); $i++) {
        if ($zmones[$i]['amzius'] >= $_GET['amzius']) {
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
    puslapioHead();
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

//atvaizduotiDuomenis($zmones);
atvaizduotiDuomenisPagalAmziu($zmones);
<?php

include 'src/Studentas.php';

function puslapioHead(): void
{
    echo '<head><title>Studentai</title><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"></head>';
}

//  ------------------------------------------------------------------
// | 3 užduotis - Surūšiuokite ir atspausdinkite studentus pagal lytį |
//  ------------------------------------------------------------------
function studentuKiekis(array $studentas): int
{
    return count($studentas);
}

function spausdintiAsmenis(array $studentas): void
{
    for ($x = 0; $x < count($studentas); $x++) {
        echo '<li class="list-group-item list-group-item-primary list-group-item-action">' . $studentas[$x] . '</li>';
    }
}

function spausdintiLentele(array $male, array $female): void
{
    echo '<div class="d-flex justify-content-center text-center"><section class="dflex justify-content-center"><h1 class="text-center">Vyrai</h1><ul class="list-group">';
    spausdintiAsmenis($male);
    echo '</ul></section>';
    echo '<section class="dflex justify-content-center"><h1 class="text-center">Moterys</h1><ul class="list-group">';
    spausdintiAsmenis($female);
    echo '</ul></section></div>';
}

function studentaiPagalLyti(array $studentas): void
{
    $male = [];
    $female = [];
    for ($x = 0; $x < studentuKiekis($studentas); $x++) {
        $firstNum = substr($studentas[$x]->getAk(), 0, 1);
        if ((int) $firstNum === 1 || (int) $firstNum === 3 || (int) $firstNum === 5)
        {
            $male[] = $studentas[$x]->getName() . ' ' . $studentas[$x]->getSurname();
        }
        elseif ((int) $firstNum === 2 || (int) $firstNum === 4 || (int) $firstNum === 6)
        {
            $female[] = $studentas[$x]->getName() . ' ' . $studentas[$x]->getSurname();
        }
    }
    spausdintiLentele($male, $female);
}

//  --------------------------------------------------------
// | 4 užduotis - Raskite jauniausią ir vyriausią studentus |
//  --------------------------------------------------------
function gimimoMetai(array $studentas): void
{
    $amzius = [];
    for ($x = 0; $x < studentuKiekis($studentas); $x++) {
        $id = $studentas[$x]->getId();
        $firstNum = (int) substr($studentas[$x]->getAk(), 0, 1);
        $yearNum = substr($studentas[$x]->getAk(), 1, 2);
        if ($firstNum === 1 || $firstNum === 2) {
            $dateArray[] = '18' . $yearNum;
            $amzius[$id] = (int) $dateArray[$x];
        } elseif ($firstNum === 3 || $firstNum === 4) {
            $dateArray[] = '19' . $yearNum;
            $amzius[$id] = (int) $dateArray[$x];
        } elseif ($firstNum === 5 || $firstNum === 6) {
            $dateArray[] = '20' . $yearNum;
            $amzius[$id] = (int) $dateArray[$x];
        }
    }
    gautiJauniausia($amzius, $studentas);
    gautiVyriausia($amzius, $studentas);
}

function gautiJauniausia(array $amzius, array $studentas): void
{
    arsort($amzius);
    $arr = array_slice($amzius, 0, 1, true);

    foreach ($arr as $int=>$intValue)
    {
        $firstNum = (int) substr($studentas[$int]->getAk(), 0, 1);
        if ($firstNum === 1 || $firstNum === 3 || $firstNum === 5) {
            echo '<br><div class="row"><h3 class="col-6 text-center bg-primary">Jauniausias studentas yra ' . $studentas[$int]->getName() . ' ' . $studentas[$int]->getSurname() .
                ', o jo gimimo data yra ' . $intValue . ' metai.</h3>';
        } elseif ($firstNum === 2 || $firstNum === 4 || $firstNum === 6) {
            echo '<br><div class="row"><h3 class="col-6 text-center bg-primary">Jauniausia studentė yra ' . $studentas[$int]->getName() . ' ' . $studentas[$int]->getSurname() .
                ', o jos gimimo data yra ' . $intValue . ' metai.</h3>';
        }
    }
}

function gautiVyriausia(array $amzius, $studentas): void
{
    asort($amzius);
    $arr = array_slice($amzius, 0, 1, true);

    foreach ($arr as $int=>$intValue)
    {
        $firstNum = (int) substr($studentas[$int]->getAk(), 0, 1);
        if ($firstNum === 1 || $firstNum === 3 || $firstNum === 5) {
            echo '<h3 class="col-6 text-center bg-secondary">Vyriausias studentas yra ' . $studentas[$int]->getName() . ' ' . $studentas[$int]->getSurname() .
                ', o jo gimimo data yra ' . $intValue . ' metai.</h3></div><br>';
        } elseif ($firstNum === 2 || $firstNum === 4 || $firstNum === 6) {
            echo '<h3 class="col-6 text-center bg-secondary">Vyriausia studentė yra ' . $studentas[$int]->getName() . ' ' . $studentas[$int]->getSurname() .
                ', o jos gimimo data yra ' . $intValue . ' metai.</h3></div><br>';
        }
    }
}

//  --------------------------------------
// | 2 užduotis - Sukurkite keletą grupių |
//  --------------------------------------
$grupe1 = new Grupe(1, 'PHP', 'PHP-1', 'Dieninis', 'Saulėtekio al. 15-1, LT-10224 Vilnius', 10);
$grupe2 = new Grupe(2, 'Typescript', 'Typescript-1', 'Vakarinis', 'Saulėtekio al. 15-1, LT-10224 Vilnius', 10);
$grupe3 = new Grupe(3, 'Java', 'Java-1', 'Dieninis', 'Saulėtekio al. 15-1, LT-10224 Vilnius', 10);

//  --------------------------------------------------------
// | 1 užduotis - Sukurkite masyvą sudarytą iš 20 studentų. |
//  --------------------------------------------------------
$studentai = [
    [0, 'Jonas', 'Jonaitis', 39605156547, $grupe1],
    [1, 'Petras', 'Petraitis', 50104061234, $grupe2],
    [2, 'Gabija', 'Jankauskaitė', 49911230257, $grupe3],
    [3, 'Ieva', 'Balčiūtė', 60209186312, $grupe2],
    [4, 'Tomas', 'Stonkus', 39807234712, $grupe2],
    [5, 'Marija', 'Gricyte', 60304084621, $grupe1],
    [6, 'Inga', 'Ingaitė', 49701188523, $grupe3],
    [7, 'Antanas', 'Baranauskas', 39110229514, $grupe2],
    [8, 'Sofija', 'Kazlauskaitė', 60004149753, $grupe1],
    [9, 'Dominyka', 'Dainė', 49409053245, $grupe3],
    [10, 'Jurgis', 'Jurgaitis', 50403110741, $grupe2],
    [11, 'Kamilė', 'Valaitytė', 49706167658, $grupe3],
    [12, 'Mykolas', 'Mykolaitis', 39511223456, $grupe3],
    [13, 'Ona', 'Onaitė', 47002124567, $grupe1],
    [14, 'Saulius', 'Saulaitis', 37506165678, $grupe1],
    [15, 'Agnė', 'Petrauskė', 60305221470, $grupe2],
    [16,'Martynas', 'Martinaitis', 50001039876, $grupe1],
    [17, 'Aloyzas', 'Petrauskis', 50203211795, $grupe3],
    [18, 'Janina', 'Janinaitė', 49803161357, $grupe1],
    [19, 'Rolandas', 'Rolaitis', 39705251278, $grupe2],
];

foreach ($studentai as $duomenys) {
    $studentas[] = new Studentas($duomenys[0], $duomenys[1], $duomenys[2], $duomenys[3], $duomenys[4]);
}

puslapioHead();
studentaiPagalLyti($studentas);
gimimoMetai($studentas);

echo '<form action="src/duomenys.php" method="post" class="form-inline col">
  <label class="my-1 mr-2" for="selectStudents">Pasirinkimas</label>
  <select class="custom-select my-1 mr-sm-2" name="selectStudents">
    <option selected>Pasirinkti studentus</option>
    <option value="1">Vakariniai</option>
    <option value="2">Dieniniai</option>
  </select>

  <div class="custom-control custom-checkbox my-1 mr-sm-2">
    <input type="checkbox" class="custom-control-input" id="customControlInline">
  </div>

  <button type="submit" class="btn btn-primary my-1">Siųsti</button>
</form>';
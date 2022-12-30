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

function studentaiPagalLyti(array $studentas): void
{
    $male = [];
    $female = [];
    for ($x = 0; $x < studentuKiekis($studentas); $x++) {
        if ($studentas[$x]->getLytis() === "Vyras")
        {
            $male[] = $studentas[$x]->getName() . ' ' . $studentas[$x]->getSurname() . ' (' . date("Y")-$studentas[$x]->getYear() . 'm.)';
        }
        elseif ($studentas[$x]->getLytis() === "Moteris")
        {
            $female[] = $studentas[$x]->getName() . ' ' . $studentas[$x]->getSurname() . ' (' . date("Y")-$studentas[$x]->getYear() . 'm.)';
        }
    }
    spausdintiLentele($male, $female);
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

function spausdintiAsmenis(array $studentas): void
{
    for ($x = 0; $x < count($studentas); $x++) {
        echo '<li class="list-group-item list-group-item-primary list-group-item-action">' . $studentas[$x] . '</li>';
    }
}

//  --------------------------------------------------------
// | 4 užduotis - Raskite jauniausią ir vyriausią studentus |
//  --------------------------------------------------------
function gimimoMetai(array $studentas): void
{
    $amzius = [];
    for ($x = 0; $x < studentuKiekis($studentas); $x++) {
        $id = $studentas[$x]->getId();
        $amzius[$id] = $studentas[$x]->getYear();
    }
    gautiJauniausia($amzius, $studentas);
    gautiVyriausia($amzius, $studentas);
}

function gautiJauniausia(array $amzius, array $studentas): void
{
    arsort($amzius);
    $arr = array_slice($amzius, 0, 1, true);

    foreach ($arr as $id=>$idValue)
    {
        if ($studentas[$id]->getLytis() === "Vyras") {
            echo '<br><div class="row"><h3 class="col-6 text-center bg-primary">Jauniausias studentas yra ' . $studentas[$id]->getName() . ' ' . $studentas[$id]->getSurname() .
                ', o jo gimimo data yra ' . $studentas[$id]->getYear() . '-' . sprintf('%02d', $studentas[$id]->getMonth()) . '-' . sprintf('%02d', $studentas[$id]->getDay()) . '.</h3>';
        } elseif ($studentas[$id]->getLytis() === "Moteris") {
            echo '<br><div class="row"><h3 class="col-6 text-center bg-primary">Jauniausia studentė yra ' . $studentas[$id]->getName() . ' ' . $studentas[$id]->getSurname() .
                ', o jos gimimo data yra ' . $studentas[$id]->getYear() . '-' . sprintf('%02d', $studentas[$id]->getMonth()) . '-' . sprintf('%02d', $studentas[$id]->getDay()) . '.</h3>';
        }
    }
}

function gautiVyriausia(array $amzius, $studentas): void
{
    asort($amzius);
    $arr = array_slice($amzius, 0, 1, true);

    foreach ($arr as $id=>$idValue)
    {
        if ($studentas[$id]->getLytis() === "Vyras") {
            echo '<h3 class="col-6 text-center bg-secondary">Vyriausias studentas yra ' . $studentas[$id]->getName() . ' ' . $studentas[$id]->getSurname() .
                ', o jo gimimo data yra ' . $studentas[$id]->getYear() . '-' . sprintf('%02d', $studentas[$id]->getMonth()) . '-' . sprintf('%02d', $studentas[$id]->getDay()) . '.</h3></div><br>';
        } elseif ($studentas[$id]->getLytis() === "Moteris") {
            echo '<h3 class="col-6 text-center bg-secondary">Vyriausia studentė yra ' . $studentas[$id]->getName() . ' ' . $studentas[$id]->getSurname() .
                ', o jos gimimo data yra ' . $studentas[$id]->getYear() . '-' . sprintf('%02d', $studentas[$id]->getMonth()) . '-' . sprintf('%02d', $studentas[$id]->getDay()) . '.</h3></div><br>';
        }
    }
}

//  -----------------------------------------------------------------
// | 5 užduotis - Sukurti Dieninių/Vakarinių grupių filtravimo formą |
//  -----------------------------------------------------------------
function sukurtiForma(): void
{
    echo '<form method="post" class="form-inline col">
  <label class="my-1 mr-2" for="selectStudents">Pasirinkimas</label>
  <select class="custom-select my-1 mr-sm-2" name="selectStudents">
    <option selected>Pasirinkti studentus</option>
    <option value="Vakarinis">Vakariniai</option>
    <option value="Dieninis">Dieniniai</option>
  </select>

  <div class="custom-control custom-checkbox my-1 mr-sm-2">
    <input type="checkbox" class="custom-control-input" id="customControlInline">
  </div>

  <button type="submit" class="btn btn-primary my-1">Siųsti</button>
</form>';
}

function spausdintiStudentus($studentas): void
{
    $kursai = [];
    $option = isset($_POST['selectStudents']) ? $_POST['selectStudents'] : false;
    echo '<br><table class="text-center table table-light table-striped table-hover"><thead class="table-dark"><tr><th>ID</th><th>Vardas</th><th>Pavardė</th>
            <th>Asmens Kodas</th><th>Gimimo Data</th><th>Kursas</th><th>Mokymų laikas</th></tr></thead><tbody>';
    foreach ($studentas as $asmuo) {
        if ($option === $asmuo->getGrupe()->getTime()) {
            $kursai['id'] = $asmuo->getId();
            $kursai['name'] = $asmuo->getName();
            $kursai['surname'] = $asmuo->getSurname();
            $kursai['kodas'] = $asmuo->getAk();
            // Add leading 0 to single digit numbers with sprintf
            $kursai['metai'] = $asmuo->getYear() . '-' . sprintf('%02d', $asmuo->getMonth()) . '-' . sprintf('%02d', $asmuo->getDay());
            $kursai['kursas'] = $asmuo->getGrupe()->getName();
            $kursai['laikas'] = $asmuo->getGrupe()->getTime();
            echo '<tr><td>' . $kursai['id'] . '</td><td>' . $kursai['name'] . '</td><td>' . $kursai['surname'] . '</td><td>' . $kursai['kodas'] .
                '</td><td>' . $kursai['metai'] . '</td><td>' . $kursai['kursas'] . '</td><td>' . $kursai['laikas'] . '</td></tr>';
        }
    }
    echo '</tbody></table>';
}

//  --------------------------------------
// | 2 užduotis - Sukurkite keletą grupių |
//  --------------------------------------
$grupe1 = new Grupe(1, 'PHP', 'PHP-1', 'Dieninis');
$grupe2 = new Grupe(2, 'Typescript', 'Typescript-1', 'Vakarinis');
$grupe3 = new Grupe(3, 'Java', 'Java-1', 'Dieninis');

//  --------------------------------------------------------
// | 1 užduotis - Sukurkite masyvą sudarytą iš 20 studentų. |
//  --------------------------------------------------------
$studentai = [
    [0, 'Jonas', 'Jonaitis', 39605156547, $grupe1],
    [1, 'Petras', 'Petraitis', 50104061234, $grupe2],
    [2, 'Gabija', 'Gabijauskaitė', 49911230257, $grupe3],
    [3, 'Ieva', 'Ievaitė', 60209186312, $grupe2],
    [4, 'Tomas', 'Tomaitis', 39807234712, $grupe2],
    [5, 'Marija', 'Marijauskaitė', 60304084621, $grupe1],
    [6, 'Inga', 'Ingaitė', 49701188523, $grupe3],
    [7, 'Antanas', 'Antananitis', 39110229514, $grupe2],
    [8, 'Sofija', 'Sofaitė', 60004149753, $grupe1],
    [9, 'Dominyka', 'Domininkaitė', 49409053245, $grupe3],
    [10, 'Jurgis', 'Jurgaitis', 50403110741, $grupe2],
    [11, 'Toma', 'Tomaitė', 49706167658, $grupe3],
    [12, 'Mykolas', 'Mykolaitis', 39511223456, $grupe3],
    [13, 'Ona', 'Onaitė', 47002124567, $grupe1],
    [14, 'Saulius', 'Saulaitis', 37506165678, $grupe1],
    [15, 'Agnė', 'Agnietė', 60305221470, $grupe2],
    [16,'Martynas', 'Martinaitis', 50001039876, $grupe1],
    [17, 'Aloyzas', 'Aloyzaitis', 50203211795, $grupe3],
    [18, 'Janina', 'Janinaitė', 49803161357, $grupe1],
    [19, 'Rolandas', 'Rolaitis', 39705251278, $grupe2],
];

foreach ($studentai as $duomenys) {
    $studentas[] = new Studentas($duomenys[0], $duomenys[1], $duomenys[2], $duomenys[3], $duomenys[4]);
}

puslapioHead();
studentaiPagalLyti($studentas);
gimimoMetai($studentas);
sukurtiForma();
spausdintiStudentus($studentas);
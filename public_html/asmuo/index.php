<?php

include 'duomenuIsvedimas.php';

$asmenuDuomenys = [
    ['vardas' => 'Jonas', 'gimimo_metai' => 1965],
    ['vardas' => 'Petras', 'gimimo_metai' => 1970],
    ['vardas' => 'Antanas', 'gimimo_metai' => 1980],
    ['vardas' => 'Ona', 'gimimo_metai' => 1990],
    ['vardas' => 'Maryte', 'gimimo_metai' => 2000],
    ['vardas' => 'Petras', 'gimimo_metai' => 1986],
    ['vardas' => 'Antanas', 'gimimo_metai' => 2005],
];

foreach ($asmenuDuomenys as $asmuo) {
    $asmenys[] = new Asmuo($asmuo['vardas'], $asmuo['gimimo_metai']);
}

echo '<head><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"></head>';

$duomenuIsvedimas = new duomenuIsvedimas();
$duomenuIsvedimas->isvestiAsmenis($asmenys);
$duomenuIsvedimas->isvestiAsmenisPagalData($asmenys, 1980);
$duomenuIsvedimas->isvestiAsmenisLentele($asmenys);

<?php

include 'Asmuo.php';

class duomenuIsvedimas
{
    public function isvestiAsmenis(array $asmenys): void
    {
        foreach ($asmenys as $asmuo) {
            echo $asmuo->vardas . ' ' . $asmuo->gimimoMetai . '<br>';
        }
    }

    public function isvestiAsmenisPagalData(array $asmenys, int $data) {
        foreach ($asmenys as $asmuo) {
            if ($data === $asmuo->gimimoMetai) {
                echo $asmuo->getVardas() . ' ' . $asmuo->getMetai() . '<br>';
            }
        }
    }

    public function isvestiAsmenisLentele($asmenys) {
        echo '<br><table class="text-center table table-dark table-striped table-hover table-bordered boder-secondary"><thead><tr><th>Vardas</th><th>Gimimo metai</th></tr></thead><tbody>';
        foreach ($asmenys as $asmuo) {
            echo '<tr><td class="text-center">' . $asmuo->vardas . '</td><td>' . $asmuo->gimimoMetai . '</td></tr>';
        }
        echo '</tbody></table>';
    }
}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP užduotys</title>
</head>
<body>
<h1>Pirma užduotis</h1>
<?php
$ceu = [
    "Italy" => "Rome",
    "Luxembourg" => "Luxembourg",
    "Belgium" => "Brussels",
    "Denmark" => "Copenhagen",
    "Finland" => "Helsinki",
    "France" => "Paris",
    "Slovakia" => "Bratislava",
    "Slovenia" => "Ljubljana",
    "Germany" => "Berlin",
    "Greece" => "Athens",
    "Ireland" => "Dublin",
    "Netherlands" => "Amsterdam",
    "Portugal" => "Lisbon",
    "Spain" => "Madrid",
    "Sweden" => "Stockholm",
    "United Kingdom" => "London",
    "Cyprus" => "Nicosia",
    "Lithuania" => "Vilnius",
    "Czech Republic" => "Prague",
    "Estonia" => "Tallin",
    "Hungary" => "Budapest",
    "Latvia" => "Riga",
    "Malta" => "Valetta",
    "Austria" => "Vienna",
    "Poland" => "Warsaw",
];

function displayElements($arr) {
    //foreach ($arr as $key => $value) {
        //echo "Valstybė yra $key, o jos sostinė yra: $value<br>";
        //echo 'Šalies <strong>' . $key . '</strong> sostinė yra <strong>' . $value . '</strong><br>';
    //}
    $i = 0;
    //while ($i < count($arr)) {
    //    $valst1 = array_keys($arr);
    //   var_dump($valst1[5]);
        //$sost1 = array_values($arr)[$i];
        //echo 'Šalies <strong>' . $valst1 . '</strong> sostinė yra <strong>' . $sost1 . '</strong><br>';
        $i++;
    for ($i = 0; $i < count($arr); $i++) {
        $valst1 = array_keys($arr)[$i];
        $sost1 = array_values($arr)[$i];
        echo 'Šalies <strong>' . $valst1 . '</strong> sostinė yra <strong>' . $sost1 . '</strong><br>';
    }
}

displayElements($ceu);
?>
<h1>Antra užduotis</h1>
<?php
ksort($ceu);
displayElements($ceu);
?>
<h1>Trečia užduotis</h1>
<?php
function displayNth($arr, $inc)
{
    $valst1 = array_keys($arr);
    $sost1 = array_values($arr);
    echo 'Grąžinama kiekviena ' . $inc . ' valstybė.<br>';
    for ($i = 0; $i < count($arr); $i += $inc) {
        echo 'Valstybės: ' . $valst1[$i] . ' sostinė yra: ' . $sost1[$i] . '<br>';
    }
    /*$x = 0;
    foreach ($arr as $key => $value) {
        if ($x === $inc) {
            echo $key . ' ' . $value . '<br>';
            $x = 0;
        } else {
            $x++;
        }
    }*/
}

displayNth($ceu, 4);
?>
<h1>Ketvirta užduotis</h1>
<?php
function letterMatch($char, $arr)
{
    echo 'Šalių ir sostinių, turinčių pavadinime raidę ' . $char . ' sąrašas:<br>';
    foreach ($arr as $key => $value) {
        $keyChars = str_split($key);
        for ($x = 0; $x < count($keyChars); $x++) {
            if ($keyChars[$x] === $char) {
                echo $key . ' (Šalis)<br>';
            }
        }
        $valueChars = str_split($value);
        for ($x = 0; $x < count($valueChars); $x++) {
            if ($valueChars[$x] === $char) {
                echo $value . ' (Sostinė)<br>';
            }
        }
    }
}

letterMatch("A", $ceu);
?>
<h1>Penkta užduotis</h1>
<div>
    <?php
    function displayValues($arr)
    {
        for ($x = 0; $x < count($arr); $x++) {
            echo $arr[$x] . '<br>';
        }
    }

    function splitArray($arr)
    {
        $countries = array();
        $capitals = array();

        foreach ($arr as $key => $value) {
            array_push($countries, $key);
            array_push($capitals, $value);
        }

        echo '<section id="section1">';
        displayValues($countries);
        echo '</section>';

        echo '<section id="section2">';
        displayValues($capitals);
        echo '</section>';
    }

    splitArray($ceu);
    ?>
</div>
<script>
    document.getElementById('section1').style.display = 'inline-block';
    document.getElementById('section2').style.display = 'inline-block';
</script>
</body>
</html>
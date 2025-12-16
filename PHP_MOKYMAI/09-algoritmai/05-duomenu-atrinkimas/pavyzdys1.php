<?php

$skaiciai = array(7, 8, 5, 3, 2, 1, 5, 2, 3, 9, 5, 7, 8, 9);
$atrinkti = array();

foreach ($skaiciai as $skaicius) {
    if ($skaicius < 5) {
        array_push($atrinkti, $skaicius);
    }
}

echo "pradiniai duomenys: <br>";
print_r($skaiciai);
echo "<br>atrinkti duomenys: <br>";
print_r($atrinkti);

<?php

$skaiciai = array(4, 7, 5, 3, 6, 9, 8, 5, 1, 3, 5);
$atrinkti = array();

foreach ($skaiciai as $skaicius) {
    if ($skaicius % 2 == 0) {
        array_push($atrinkti, $skaicius);
    }
}

echo "pradiniai duomenys: ";
print_r($skaiciai);
echo "<br> atrinkti duomenys: ";
print_r($atrinkti);

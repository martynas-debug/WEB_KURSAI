<?php

function suma($skaiciai) {
    $suma = 0;
    foreach ($skaiciai as $skaicius) {
        $suma += $skaicius;
    }
    return $suma;
}

function vidurkis($suma, $kiekis) {
    return $suma / $kiekis;
}

function skaiciavimai($skaiciai) {
    echo "skaiciai: " . json_encode($skaiciai) . "<br>";
    $suma = suma($skaiciai);
    echo "suma: $suma <br>";
    echo "vidurkis: " . vidurkis($suma, count($skaiciai)) . "<br><br>";
}

$skaiciai1 = array(4, 7, 8, 6, 5, 2, 3, 9);
$skaiciai2 = array(7, 8, 9, 3, 2, 1);

skaiciavimai($skaiciai1);
skaiciavimai($skaiciai2);

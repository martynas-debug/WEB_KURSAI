<?php

$skaiciai = array(4, 7, 5, 9, 3, 6, 5, 4);

$didziausias = $skaiciai[0];
$indeksas = 0;

for ($i = 0; $i < count($skaiciai); $i++) {
    if ($skaiciai[$i] > $didziausias) {
        $didziausias = $skaiciai[$i];
        $indeksas = $i;
    }
}

echo "didziausias skaicius yra $didziausias, jo indeksas $indeksas";

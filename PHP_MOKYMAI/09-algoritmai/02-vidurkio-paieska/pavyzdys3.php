<?php

$skaiciai = array(7, 4, 6, 5, 4, 3, 2, 1);

$suma = 0;
$kiekis = 0;

foreach ($skaiciai as $skaicius) {
    if ($skaicius % 2 == 0) {
        $suma += $skaicius;
        $kiekis++;
    }
}

$vidurkis = $suma / $kiekis;
echo "lyginiu skaiciu vidurkis: $vidurkis";

<?php

$skaiciai = array(1, 2, 3, 4, 7, 8, 9, 6, 5, 4, 3, 2);

$suma = 0;
$kiekis = 0;

foreach ($skaiciai as $skaicius) {
    if ($skaicius % 3 == 0 || $skaicius % 4 == 0) {
        $suma += $skaicius;
        $kiekis++;
    }
}

$vidurkis = $suma / $kiekis;
echo "atrinktu skaiciu vidurkis: $vidurkis";

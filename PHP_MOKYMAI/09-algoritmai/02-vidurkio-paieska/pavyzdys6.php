<?php

$skaiciai = array(
    array(7, 5, 1, 5, 7),
    array(4, 7, 8, 6, 3),
    array(9, 7, 8, 2, 3),
    array(5, 8, 7, 3, 1),
    array(5, 9, 8, 7, 3),
);

$suma = 0;
$kiekis = 0;

foreach ($skaiciai as $vienmatis) {
    foreach ($vienmatis as $skaicius) {
        if ($skaicius > 5) {
            $suma += $skaicius;
            $kiekis++;
        }
    }
}

$vidurkis = $suma / $kiekis;
echo "skaiciu didesniu nei 5 vidurkis: $vidurkis";

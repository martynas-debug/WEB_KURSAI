<?php

$skaiciai = array(3, 4, 7, 5, 3, 6);

$suma = 0;

foreach ($skaiciai as $skaicius) {
    $suma += $skaicius;
}

$vidurkis = $suma / count($skaiciai);
echo "vidurkis: $vidurkis";

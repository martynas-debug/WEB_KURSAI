<?php

$skaiciai = array(
    array(14, 23, 17, 82, 31),
    array(42, 35, 23, 87, 66),
    array(74, 85, 96, 52, 14),
    array(45, 78, 89, 23, 73),
    array(12, 17, 85, 36, 97)
);

$suma = 0;
$kiekis = 0;

foreach ($skaiciai as $vienmatis) {
    foreach ($vienmatis as $skaicius) {
        $suma += $skaicius;
    }
    $kiekis += count($vienmatis);
}

$vidurkis = $suma / $kiekis;
echo "vidurkis: $vidurkis";

<?php

$skaiciai = array(9, 8, 7, 2, 3);

$suma = 0;

for ($i = 0; $i < count($skaiciai); $i++) {
    $suma += $skaiciai[$i];
}

$vidurkis = $suma / count($skaiciai);
echo "vidurkis: $vidurkis";

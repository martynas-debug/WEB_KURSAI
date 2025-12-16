<?php

$skaiciai = array(5, 4, 7, 5, 12, 7, 5, 1);
$kiekis = count($skaiciai);
$suma = 0;

for ($i = 0; $i < $kiekis; $i++) {
    $suma += $skaiciai[$i];
}

echo "suma: $suma <br>";
echo "vidurkis: " . ($suma / $kiekis);

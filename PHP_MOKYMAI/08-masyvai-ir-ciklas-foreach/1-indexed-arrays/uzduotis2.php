<?php

// Susikurkite skaičių masyvą. Suskaičiuokite skaičių sumą, vidurkį.


$skaiciai = array(5, 10, 15, 20, 25);
$suma = 0;
for ($i = 0; $i < count($skaiciai); $i++) {
    $suma += $skaiciai[$i];
}
$vidurkis = $suma / count($skaiciai);
echo "Suma: $suma\n";
echo "Vidurkis: $vidurkis\n";







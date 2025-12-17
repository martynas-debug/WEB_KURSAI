<?php

// Susikurkite skaičių masyvą. Raskite visų skaičių sumą ir vidurkį.


$skaiciai = array(6, 3, 9, 23, 1, 8, 2);
$kiekis = count($skaiciai);
$suma = 0;

for ($i = 0; $i < $kiekis; $i++) {
    $suma += $skaiciai[$i];
}

echo "suma: $suma <br>";
echo "vidurkis: " . ($suma / $kiekis); 





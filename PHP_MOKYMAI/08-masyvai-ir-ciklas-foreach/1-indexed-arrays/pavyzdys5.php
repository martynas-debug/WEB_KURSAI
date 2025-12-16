<?php

$skaiciai = array(4, 7, 5, 3, 6, 8);

print_r($skaiciai);
echo "<br>";

$kiekis = count($skaiciai);
echo "elementu kiekis: $kiekis <br>";
echo "pirmo indeksas: 0, o reiksme: $skaiciai[0] <br>";
echo "paskutinio indeksas (kiekis - 1, nes numeracija nuo 0): " . ($kiekis - 1);
echo ", o reiksme: " . $skaiciai[$kiekis - 1];

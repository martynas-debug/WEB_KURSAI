<?php

$skaiciai = array(2, 7, 4, 5, 6, 9, 7);
$ieskomas = 5;
$indeksas = -1;

for ($i = 0; $i < count($skaiciai); $i++) {
    if ($skaiciai[$i] === $ieskomas) {
        $indeksas = $i;
        break;
    }
}

echo "skaicius $ieskomas buvo rastas indekse $indeksas";

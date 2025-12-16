<?php

$skaiciai = array(7, 4, 5, 8, 3, 1);

$suma = 0;

foreach ($skaiciai as $skaicius) {
    if ($skaicius % 2 == 0) {
        $suma += $skaicius;
    }
}

echo "lyginiu suma: $suma";

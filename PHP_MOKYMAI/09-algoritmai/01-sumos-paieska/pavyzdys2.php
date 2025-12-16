<?php

$skaiciai = array(9, 7, 4, 3, 8, 5, 4, 3, 4);

$suma = 0;

foreach ($skaiciai as $skaicius) {
    $suma += $skaicius;
}

echo "suma: $suma";

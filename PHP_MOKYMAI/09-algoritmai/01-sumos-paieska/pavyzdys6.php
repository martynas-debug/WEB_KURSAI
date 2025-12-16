<?php

$visiSkaiciai = array(
    array(4, 7, 3, 5, 8, 9, 4, 2),
    array(7, 8, 3, 0, 1, 4, 7, 4, 5, 3),
    array(4, 4, 7, 5, 6, 9, 7, 4, 3)
);

$suma = 0;

foreach ($visiSkaiciai as $skaiciai) {
    foreach ($skaiciai as $skaicius) {
        $suma += $skaicius;
    }
}

echo "visu turimu skaiciu suma: $suma";

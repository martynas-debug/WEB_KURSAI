<?php

$visiSkaiciai = array(
    array(4, 7, 3, 5, 8, 9, 4, 2),
    array(7, 8, 3, 0, 1, 4, 7, 4, 5, 3),
    array(4, 4, 7, 5, 6, 9, 7, 4, 3)
);

$suma = 0;

for ($i = 0; $i < count($visiSkaiciai); $i++) {
    for ($j = 0; $j < count($visiSkaiciai[$i]); $j++) {
        $suma += $visiSkaiciai[$i][$j];
    }
}

echo "visu turimu skaiciu suma: $suma";

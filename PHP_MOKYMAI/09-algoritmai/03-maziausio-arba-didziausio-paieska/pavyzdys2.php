<?php

$skaiciai = array(7, 8, 9, 3, 2, 1, 7, 4, 5);

$min = $skaiciai[0];

foreach ($skaiciai as $skaicius) {
    if ($skaicius < $min) {
        $min = $skaicius;
    }
}

echo "maziausias: $min";

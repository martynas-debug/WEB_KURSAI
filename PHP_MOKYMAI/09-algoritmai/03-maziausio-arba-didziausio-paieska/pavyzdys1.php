<?php

$skaiciai = array(8, 4, 3, 5, 7, 1);

$min = $skaiciai[0];

for ($i = 0; $i < count($skaiciai); $i++) {
    if ($skaiciai[$i] < $min) {
        $min = $skaiciai[$i];
    }
}

echo "maziausias: $min";

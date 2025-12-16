<?php

$skaiciai = array(4, 7, 8, 3, 5, 8);

$didziausias = $skaiciai[0];

foreach ($skaiciai as $skaicius) {
    if ($skaicius > $didziausias) {
        $didziausias = $skaicius;
    }
}

echo "didziausias: $didziausias";

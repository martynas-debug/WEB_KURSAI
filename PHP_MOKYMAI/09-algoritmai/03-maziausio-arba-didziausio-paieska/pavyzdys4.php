<?php

$skaiciai = array(-3, -7, 0, 1, -7, 10, 8, 3, 9);

$didziausias = $skaiciai[0];

for ($i = 0; $i < count($skaiciai); $i++) {
    if ($skaiciai[$i] > $didziausias) {
        $didziausias = $skaiciai[$i];
    }
}

echo "didziausias: $didziausias";

<?php

function suma($masyvas) {
    $sum = 0;
    foreach ($masyvas as $skaicius) {
        $sum += $skaicius;
    }
    echo "suma: $sum <br>";
}

$skaiciai1 = array(7, 8, 9, 6, 3, 2, 4, 5);
$skaiciai2 = array(8, 9, 8, 7, 2, 3, 0, 1, 4, 7);
$skaiciai3 = array(4, 2, 3, 4);

suma($skaiciai1);
suma($skaiciai2);
suma($skaiciai3);

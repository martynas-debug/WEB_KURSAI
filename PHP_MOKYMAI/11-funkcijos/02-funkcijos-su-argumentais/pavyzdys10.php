<?php

function sumaIrVidurkis($masyvas) {
    $sum = 0;
    foreach ($masyvas as $skaicius) {
        $sum += $skaicius;
    }
    echo "suma: $sum <br>";
    vidurkis($sum, $masyvas);
}

function vidurkis($suma, $masyvas) {
    $vid = $suma / count($masyvas);
    echo "vidurkis: $vid <br>";
}

$skaiciai = array(4, 7, 8, 5, 3, 6, 5);

sumaIrVidurkis($skaiciai);

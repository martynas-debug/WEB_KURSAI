<?php

$skaiciai = array(4, 7, 2, 3, 4, 5, 2);

$suma = 0;
$tikrinimoSk = 5;

foreach ($skaiciai as $skaicius) {
    if ($skaicius > $tikrinimoSk) {
        $suma += $skaicius;
    }
}

echo "skaiciu didesniu uz $tikrinimoSk suma yra $suma";

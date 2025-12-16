<?php

$skaiciai1 = array(1, 4, 7, 5, 3, 4);
$skaiciai2 = array(9, 5, 4, 7, 3);

$suma1 = 0;
$suma2 = 0;

foreach ($skaiciai1 as $skaicius) {
    $suma1 += $skaicius;
}

foreach ($skaiciai2 as $skaicius) {
    $suma2 += $skaicius;
}

echo "pirmo suma: $suma1 <br>";
echo "antro suma: $suma2 <br>";

if ($suma1 > $suma2) {
    echo "pirmo suma didesne";
} else if ($suma2 > $suma1) {
    echo "antro suma didesne";
} else {
    echo "skaiciai lygus";
}

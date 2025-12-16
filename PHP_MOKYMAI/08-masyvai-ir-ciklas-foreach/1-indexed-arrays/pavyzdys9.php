<?php

$skaiciai1 = array(1, 2, 3, 4, 10, 11, 12, 13, 14);
$skaiciai2 = array(5, 6, 7, 8, 9, 15, 16, 17, 18);

$pirmas = $skaiciai1[rand(0, count($skaiciai1) - 1)];
$antras = $skaiciai2[rand(0, count($skaiciai2) - 1)];

$suma = $pirmas + $antras;
$skirtumas = $pirmas - $antras;
$sandauga = $pirmas * $antras;
$dalmuo = $pirmas / $antras;

echo "$pirmas + $antras = $suma <br>";
echo "$pirmas - $antras = $skirtumas <br>";
echo "$pirmas * $antras = $sandauga <br>";
echo "$pirmas / $antras = $dalmuo <br>";

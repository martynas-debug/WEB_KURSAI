<?php

$skaiciai = array(5, 7, 8, 3, 1, 4, 3);

$didziausiasIndeksas = count($skaiciai) - 1;

$pirmas = $skaiciai[rand(0, $didziausiasIndeksas)];
$antras = $skaiciai[rand(0, $didziausiasIndeksas)];
$trecias = $skaiciai[rand(0, $didziausiasIndeksas)];

echo "$pirmas + $antras + $trecias = " . ($pirmas + $antras + $trecias);

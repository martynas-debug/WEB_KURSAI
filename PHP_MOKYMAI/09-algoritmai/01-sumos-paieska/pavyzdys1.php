<?php

$skaiciai = array(4, 7, 8, 6, 9, 3, 1);

$suma = 0;

for ($i = 0; $i < count($skaiciai); $i++) {
    $suma += $skaiciai[$i];
}

echo "suma: $suma";

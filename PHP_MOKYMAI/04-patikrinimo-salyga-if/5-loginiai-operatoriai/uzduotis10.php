<?php

// Susikurkite tris skaičius. Suraskite kuris iš šių skaičių yra mažiausias.

$num1 = 15;
$num2 = 27;
$num3 = 9;
$min = $num1;
if ($num2 < $min) {
    $min = $num2;
}
if ($num3 < $min) {
    $min = $num3;
}
echo "Mažiausias skaičius yra: $min";





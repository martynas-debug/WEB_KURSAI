<?php

// Susikurkite tris skaičius. Suraskite kuris iš šių skaičių yra didžiausias.



$num1 = 15;
$num2 = 27;
$num3 = 9;
$max = $num1;
if ($num2 > $max) {
    $max = $num2;
}
if ($num3 > $max) {
    $max = $num3;
}
echo "Didžiausias skaičius yra: $max";



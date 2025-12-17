<?php

// Susikurkite kintamąjį, kuris nusakytų kiek fibonačiaus skaičių turi būti
// sugeneruota. Užpildykite skaičių masyvą su tiek fibonačiaus skaičių kiek
// buvo nurodyta. Išveskite masyve esančius skaičius į nerikiuotą sąrašą.



$kiekis = 10; // Kiek fibonačiaus skaičių sugeneruoti
$fibonacci = array();
$fibonacci[0] = 0;
$fibonacci[1] = 1;
for ($i = 2; $i < $kiekis; $i++) {
    $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
}
echo "Fibonacci skaiciai: ";
for ($i = 0; $i < $kiekis; $i++) {
    echo "$fibonacci[$i]";
    if ($i + 1 < $kiekis) {
        echo ", ";
    } else {
        echo ".";
    }
}






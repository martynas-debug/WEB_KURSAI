<?php

// Susikurkite skaičių masyvą, kurį užpildykite atsitiktiniais skaičiais. Išveskite
// visus skaičius su indeksais į lentelę. Pavyzdžiui: pirmas stulpelis indekso
// numeriai, o antras stulpelis - patys skaičiai, arba pirma eilutė indeksai, o
// antra eilutė skaičiai, ar dar kaip nors.

$skaiciai1 = array(1, 5, 6, 3);
$skaiciai2 = array(2, 56, 12);

echo "Indeksai: ";

foreach ($skaiciai1 as $skaicius) {
    echo "$skaicius ";
}

echo "<br> Skaiciu eilute: ";

foreach ($skaiciai2 as $skaicius) {
    echo "$skaicius "; 
}




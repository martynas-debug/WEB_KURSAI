<?php

// Susikurkite studentų vardų masyvą. Išveskite į lentelę vardus su masyvo
// indeksais. Pavyzdžiui: pirmas stulpelis - indeksas, o antras stulpelis -
// vardas.




$indeksas = array("Indeksas", "Dar vienas Indeksas", "Dar daugiau Indeksu");
$vardas = array("Patricija", "Renaldas", "Marija", "Martynas");

if (count($indeksas) > 0) {
    echo "<ul>";
    foreach ($indeksas as $item) {
        echo "<li>$item</li>";
    }
    echo "</ul>";
} else {
    echo "Nera duomenu?";
}

if (count($vardas) > 0) {
    echo "<ul>";
    foreach ($vardas as $item) {
        echo "<li>$item</li>";
    }
    echo "</ul>";
} else {
    echo "Nera duomenu?";
}



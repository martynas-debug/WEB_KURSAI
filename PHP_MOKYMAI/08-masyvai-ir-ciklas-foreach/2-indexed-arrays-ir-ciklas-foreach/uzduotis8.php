<?php

// Susikurkite medžių pavadinimų masyvą. Išveskite visus medžių
// pavadinimus į nerikiuotą sąrašą.

$medziai = array("Uosis", "Berzas", "Pusis", "Azuolas", "Liepa", "Gluosnis", "Egle");
$kiekis = count($medziai);

echo "Medziai: ";

for ($i = 0; $i < $kiekis; $i++) {
    echo "$medziai[$i]";
    if ($i + 1 < $kiekis) {
        echo ", ";
    } else {
        echo ".";
    }
}






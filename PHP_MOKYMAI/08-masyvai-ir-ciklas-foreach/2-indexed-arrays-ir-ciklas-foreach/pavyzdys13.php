<?php

$vardai = array("Martynas", "Lukas", "Tomas", "Gabriele", "Joana");
$kiekis = count($vardai);

echo "Vardai: ";

for ($i = 0; $i < $kiekis; $i++) {
    echo "$vardai[$i]";
    if ($i + 1 < $kiekis) {
        echo ", ";
    } else {
        echo ".";
    }
}

<?php

function sudetis($pirmas, $antras) {
    $atsakymas = $pirmas + $antras;
    echo "$pirmas + $antras = $atsakymas <br>";
}

function atimtis($pirmas, $antras) {
    $atsakymas = $pirmas - $antras;
    echo "$pirmas - $antras = $atsakymas <br>";
}

function skaiciavimai($pirmas, $antras) {
    sudetis($pirmas, $antras);
    atimtis($pirmas, $antras);
    echo "<br>";
}

skaiciavimai(4, 5);
skaiciavimai(8, 9);
skaiciavimai(7, 2);

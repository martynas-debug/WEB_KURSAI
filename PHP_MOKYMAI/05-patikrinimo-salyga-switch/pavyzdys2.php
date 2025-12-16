<?php

$vardas = "Jonas";

switch ($vardas) {
    case "Petras":
        echo "Labas, Petrai.";
        break;
    case "Jonas":
        echo "Labas, Jonai.";
        break;
}

// IF SALYGOS ATITIKMUO TAM PACIAM TIKRINIMUI:
if ($vardas == "Petras") {
    echo "Labas, Petrai.";
} else if ($vardas == "Jonas") {
    echo "Labas, Jonai.";
}

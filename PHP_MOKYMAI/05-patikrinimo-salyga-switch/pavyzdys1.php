<?php

$skaicius = 2;

switch ($skaicius) {
    case 1:
        echo "vienas";
        break;
    case 2:
        echo "du";
        break;
    case 3:
        echo "trys";
        break;
}

// IF SALYGOS ATITIKMUO TAM PACIAM TIKRINIMUI:
if ($skaicius == 1) {
    echo "vienas";
} else if ($skaicius == 2) {
    echo "du";
} else if ($skaicius == 3) {
    echo "trys";
}

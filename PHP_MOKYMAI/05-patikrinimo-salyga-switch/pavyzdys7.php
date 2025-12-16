<?php

$pasirinkimas = 2;

switch ($pasirinkimas) {
    case 1:
        echo "vartotojas pasirinko nr 1 <br>";
        echo "vykdomas kodas, kuris susijes su pirmu pasirinkimu <br>";
        echo (5 + 3) * 2 . "<br>";
        echo "labas krabas";
        // ...
        break;
    case 2:
        echo "vartotojas pasirinko nr 2 <br>";
        echo "vykdomas kodas, kuris susijes su antru pasirinkimu <br>";
        echo "5 * 1 = " . 5 * 1 . "<br>";
        echo "5 * 2 = " . 5 * 2 . "<br>";
        echo "5 * 3 = " . 5 * 3 . "<br>";
        // ...
        break;
    default:
        echo "ivyko klaida";
        break;
}

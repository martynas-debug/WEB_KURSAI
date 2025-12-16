<?php

$uzsakymoBusena = "vykdomas";

switch ($uzsakymoBusena) {
    case "sukurtas":
        echo "uzsakymas buvo sukurtas, greitu metu bus issiustas";
        break;
    case "patvirtintas":
        echo "uzsakymo vykdymas patvirtintas, siuntini tuoj perims kurjeris";
        break;
    case "vykdomas":
        echo "preke siuo metu keliauja";
        break;
    case "paruostas":
        echo "preke galite atsiimti pasirinktu adresu";
        break;
    case "baigtas":
        echo "preke atsiimta";
        break;
    default:
        echo "kazkas negerai";
        break;
}

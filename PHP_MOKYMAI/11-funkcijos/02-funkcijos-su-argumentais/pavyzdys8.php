<?php

$zodziai = array("gitara", "drugelis", "zirafa", "medis", "gele");
$studentai = array("Marius", "Giedrius", "Povilas", "Gintare", "Elina", "Vytautas");
$auto = array();

function sarasas($pavadinimas, $masyvas) {
    echo "<h1>$pavadinimas</h1>";

    if (count($masyvas) > 0) {
        echo "<ul>";
        foreach ($masyvas as $elementas) {
            echo "<li>$elementas</li>";
        }
        echo "</ul>";
    } else {
        echo "Sarase nieko nera";
    }

    echo "<br>";
}

sarasas("Studentai", $studentai);
sarasas("Zodziai", $zodziai);
sarasas("Automobiliai", $auto);

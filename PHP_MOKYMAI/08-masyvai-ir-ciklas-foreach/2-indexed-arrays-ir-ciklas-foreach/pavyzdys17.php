<?php

$nav = array("Pradzia", "Produkcija", "Paslaugos",
        "Atlikti darbai", "Apie mus", "Kontaktai");

if (count($nav) > 0) {
    echo "<ul>";
    foreach ($nav as $item) {
        echo "<li>$item</li>";
    }
    echo "</ul>";
} else {
    echo "Nera duomenu";
}

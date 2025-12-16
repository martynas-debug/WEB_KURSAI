<?php

$pazymiai = array(
    "Tomas" => 7,
    "Gintare" => 8,
    "Lukas" => 8,
    "Justina" => 9,
    "Gabriele" => 7,
    "Paulius" => 8,
    "Povilas" => 9
);

echo '<table border="1">'
        . "<tr>"
            . "<td>Vardas</td>"
            . "<td>Pazymys</td>"
        . "</tr>";

    foreach ($pazymiai as $vardas => $pazymys) {
        echo "<tr>"
                . "<td>$vardas</td>"
                . "<td>$pazymys</td>"
            . "</tr>";
    }

echo "</table>";

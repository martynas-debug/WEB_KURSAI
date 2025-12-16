<?php

function spausdintiMasinas($headeris, $masinos) {
    echo "<h1>$headeris</h1>";

    echo '<table border="1">';
    echo "<tr><th>Marke</th><th>Modelis</th><th>Metai</th><th>Rida</th></tr>";
    foreach ($masinos as $masina) {
        echo "<tr>";
        foreach ($masina as $key => $value) {
            echo "<td>$value</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

$masinos1 = array(
    array("marke" => "JBASh", "modelis" => "asd4", "metai" => 2005, "rida" => 254132),
    array("marke" => "Asdgd", "modelis" => "5454", "metai" => 2017, "rida" => 4194),
    array("marke" => "Wetd", "modelis" => "Q78", "metai" => 2003, "rida" => 541804),
    array("marke" => "SFfh", "modelis" => "B98", "metai" => 1994, "rida" => 419784),
);

spausdintiMasinas("Masinos", $masinos1);

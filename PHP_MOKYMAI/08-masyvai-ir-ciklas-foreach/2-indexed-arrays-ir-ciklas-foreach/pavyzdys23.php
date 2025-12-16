<?php

$masinos = array("audi", "bmw", "mercedes");
$rida = array(30041, 24453, 14423);

echo '<table border="1">'
        . "<tr>"
            . "<td>Indeksas</td>"
            . "<td>Masina</td>"
            . "<td>Rida</td>"
        . "</tr>";

for ($i = 0; $i < count($masinos); $i++) {
    echo "<tr>"
            . "<td>$i</td>"
            . "<td>$masinos[$i]</td>"
            . "<td>$rida[$i]</td>"
        . "</tr>";
}

echo '</table>';

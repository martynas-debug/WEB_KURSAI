<?php

function spausdintiLentele($eilutes, $stulpeliai) {
    echo '<table border="1">';
    for ($i = 0; $i < $eilutes; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $stulpeliai; $j++) {
            echo "<td>$i $j</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    echo "<br>";
}

spausdintiLentele(4, 6);
spausdintiLentele(2, 10);
spausdintiLentele(3, 3);

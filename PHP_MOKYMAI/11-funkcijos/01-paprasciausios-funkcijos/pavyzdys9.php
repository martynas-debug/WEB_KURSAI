<?php

function lentele() {
    echo '<table border="1">';
    for ($i = 0; $i < 5; $i++) {
        echo "<tr>";
        for ($j = 0; $j < 10; $j++) {
            echo "<td>$i $j</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    echo "<br>";
}

lentele();
lentele();

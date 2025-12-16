<?php

$zodziai = array("kelmas", "pieva", "kaimas", "suo");

echo '<table border="1">';

for ($i = 0; $i < count($zodziai); $i++) {
    echo "<tr>";
    echo "<td>$i</td>";
    echo "<td>$zodziai[$i]</td>";
    echo "</tr>";
}

echo "</table>";

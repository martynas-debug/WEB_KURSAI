<?php

$studentai = array(
    array("Tomas", 7, 5, 3, 9, 10),
    array("Greta", 9, 5, 7, 3, 7),
    array("Aleksandras", 4, 7, 2, 9, 10),
    array("Gytis", 4, 7, 2, 9, 9),
    array("Gabriele", 8, 7, 2, 3, 7)
);

?>

<h1>Studentai</h1>

<table border="1">
    <tr>
        <td>Vardas</td>
        <td colspan="5">Pazymiai</td>
    </tr>
    <?php
        foreach ($studentai as $studentas) {
            echo "<tr>";
            foreach ($studentas as $duomenys) {
                echo "<td>$duomenys</td>";
            }
            echo "</tr>";
        }
    ?>
</table>

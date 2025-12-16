<?php

$studentai = array(
    array("Tomas", 7, 5, 3, 9, 10),
    array("Greta", 9, 5, 7, 3, 7),
    array("Aleksandras", 4, 7, 2, 9, 10),
    array("Gytis", 4, 7, 2, 9, 9),
    array("Gabriele", 8, 7, 2, 3, 7)
);

?>

<ul>
    <?php
        foreach ($studentai as $studentas) {
            echo "<li>";
            echo "Studento $studentas[0] turimi pazymiai: ";
            for ($i = 1; $i < count($studentas); $i++) {
                echo "$studentas[$i] ";
            }
            echo "</li>";
        }
    ?>
</ul>

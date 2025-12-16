<?php

$miestai = array(
    array("pavadinimas" => "Kaunas", "gyventojai" => 350000),
    array("pavadinimas" => "Vilnius", "gyventojai" => 500000),
    array("pavadinimas" => "Klaipeda", "gyventojai" => 200000),
    array("pavadinimas" => "Siauliai", "gyventojai" => 100000),
    array("pavadinimas" => "Panevezys", "gyventojai" => 85000),
);

$atrinkti = array();

foreach ($miestai as $miestas) {
    if ($miestas["gyventojai"] >= 200000 && $miestas["gyventojai"] <= 500000) {
        array_push($atrinkti, $miestas);
    }
}

?>

<table border="1">
    <tr>
        <th>Pavadinimas</th>
        <th>Gyventojai</th>
    </tr>
    <?php
        foreach ($atrinkti as $miestas) {
            echo "<tr>";
            foreach ($miestas as $key => $value) {
                echo "<td>$value</td>";
            }
            echo "<tr>";
        }
    ?>
</table>

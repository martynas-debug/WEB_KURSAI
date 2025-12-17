<?php

// Susikurkite masyvą, kuriame būtų saugomi duomenys apie žuvis (rūšis,
// svoris, ilgis, ar skani). Išveskite visus šiuos duomenis sąraše,
// sugeneruojant žmogišką sakinį (pvz.: žuvis {rūšis} sveria {svoris}, jos ilgis
// {ilgis} cm, zuvis yra {skani/neskani}.).



$zuvys = array(
    array("rusis" => "lydeka", "svoris" => "80", "ilgis" => 13, "ar skani" => "taip"),
    array("rusis" => "skumbre", "svoris" => "111", "ilgis" => 14, "ar skani" => "ne"),
    array("rusis" => "samas", "svoris" => "120", "ilgis" => 43, "ar skani" => "ne"),
    array("rusis" => "ersketas", "svoris" => "37", "ilgis" => 41, "ar skani" => "taip"),
    array("rusis" => "piranija", "svoris" => "23", "ilgis" => 18, "ar skani" => "taip"),
);

?>

<table border="1">
    <tr>
        <th>Rusis</th>
        <th>Svoris</th>
        <th>Ilgis</th>
        <th>Ar skani</th>
    </tr>
    <?php
        foreach ($zuvys as $zuvis) {
            echo "<tr>";
            echo "<td>".$zuvis['rusis']."</td>";
            echo "<td>".$zuvis['svoris']."</td>";
            echo "<td>".$zuvis['ilgis']." cm</td>";
            echo "<td>".$zuvis['ar skani']."</td>";
            echo "</tr>";
        }
    ?>
</table>




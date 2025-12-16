<?php

$automobiliai = array(
    array("marke" => "audi", "modelis" => "80", "rida" => 13458),
    array("marke" => "bmw", "modelis" => "E360", "rida" => 14887),
    array("marke" => "opel", "modelis" => "zafira", "rida" => 43149),
    array("marke" => "wolswagen", "modelis" => "beetle", "rida" => 41678),
    array("marke" => "citroen", "modelis" => "xsara", "rida" => 18795),
);

?>

<table border="1">
    <tr>
        <th>Marke</th>
        <th>Modelis</th>
        <th>Rida</th>
    </tr>
    <?php
        foreach ($automobiliai as $auto) {
            echo "<tr>";
            echo "<td>".$auto['marke']."</td>";
            echo "<td>".$auto['modelis']."</td>";
            echo "<td>".$auto['rida']." km</td>";
            echo "</tr>";
        }
    ?>
</table>

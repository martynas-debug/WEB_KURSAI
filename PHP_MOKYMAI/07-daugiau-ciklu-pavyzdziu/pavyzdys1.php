<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Puslapis</title>
        <style>
            table {
                width: 100%;
                text-align: center;
            }
            table th {
                background: royalblue;
                height: 40px;
                color: white;
            }
            table td {
                height: 30px;
            }
        </style>
    </head>
    <body>
        <table border="1">
            <tr>
                <th>Pirmas stulpelis</th>
                <th>Antras stulpelis</th>
                <th>Trecias stulpelis</th>
                <th>Ketvirtas stulpelis</th>
                <th>Penktas stulpelis</th>
            </tr>
            <?php
                for ($i = 0; $i < 10; $i++) {
                    echo "<tr>";
                    for ($j = 0; $j < 5; $j++) {
                        echo "<td>" . rand(1, 100) . "</td>";
                    }
                    echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>



<?php

// UŽDUOTYS:

// - Pervadinkite stulpelio “Penktas stulpelis” tekstą į “Suma”.
// - Paskutiniame, kiekvienos eilutės stulpelyje išveskite visos eilės (pirmų
// keturių stulpelių) skaičių sumą. Pavyzdžiui, pirmuose keturiuose
// stulpeliuose buvo išvesti skaičiai: 1, 2, 3, 4, tai penktame stulpelyje bus šių
// skaičių suma - 10.
// - Pridėkite šeštą stulpelį, kuriame išveskite vidurkį, gautą iš pirmų keturių
// eilutės stulpelių.


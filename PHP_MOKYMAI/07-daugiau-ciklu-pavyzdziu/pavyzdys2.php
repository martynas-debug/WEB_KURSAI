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
                height: 40px;
                background: royalblue;
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
                <th>Skaicius #1</th>
                <th>Veiksmas</th>
                <th>Skaicius #2</th>
                <th>Atsakymas</th>
            </tr>
            <?php
                $kiek = rand(5, 30);

                for ($i = 0; $i < $kiek; $i++) {
                    $skaicius1 = rand(1, 10);
                    $skaicius2 = rand(1, 10);
                    $veiksmoNr = rand(1, 4);
                    $veiksmas = "+";
                    $atsakymas = $skaicius1 + $skaicius2;

                    switch ($veiksmoNr) {
                        case 1:
                            $veiksmas = "+";
                            $atsakymas = $skaicius1 + $skaicius2;
                            break;
                        case 2:
                            $veiksmas = "-";
                            $atsakymas = $skaicius1 - $skaicius2;
                            break;
                        case 3:
                            $veiksmas = "*";
                            $atsakymas = $skaicius1 * $skaicius2;
                            break;
                        case 4:
                            $veiksmas = "/";
                            $atsakymas = $skaicius1 / $skaicius2;
                            break;
                        default:
                            $veiksmas = "+";
                            $atsakymas = $skaicius1 + $skaicius2;
                            break;
                    }

                    echo "<tr>";
                    echo "<td>$skaicius1</td>";
                    echo "<td>$veiksmas</td>";
                    echo "<td>$skaicius2</td>";
                    echo "<td>$atsakymas</td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>



<?php

// UŽDUOTYS:

// Pridėkite šiuos papildomus stulpelius lentelėje, kuriuose atlikite veiksmus
// su tos pačios eilutės skaičiais bei gautus atsakymus išveskite:
// - Pirmo skaičiaus kvadratas.
// - Antro skaičiaus trečias laipsnis.
// - Abiejų skaičių vidurkis.
// - Kuris skaičius didesnis.
// - Atliktas veiksmas žodžiais. Pavyzdžiui veiksmas buvo +, tai langelyje išveskite žodį “sudėtis”.

                for ($i = 0; $i < $kiek; $i++) {
                    $skaicius1 = rand(1, 10);
                    $skaicius2 = rand(1, 10);
                    $veiksmoNr = rand(1, 4);
                    $veiksmas = "+";
                    $atsakymas = $skaicius1 + $skaicius2;
                    $veiksmasZodziais = "sudėtis";

                    switch ($veiksmoNr) {
                        case 1:
                            $veiksmas = "+";
                            $atsakymas = $skaicius1 + $skaicius2;
                            $veiksmasZodziais = "sudėtis";
                            break;
                        case 2:
                            $veiksmas = "-";
                            $atsakymas = $skaicius1 - $skaicius2;
                            $veiksmasZodziais = "atimtis";
                            break;
                        case 3:
                            $veiksmas = "*";
                            $atsakymas = $skaicius1 * $skaicius2;
                            $veiksmasZodziais = "daugyba";
                            break;
                        case 4:
                            $veiksmas = "/";
                            $atsakymas = $skaicius1 / $skaicius2;
                            $veiksmasZodziais = "dalyba";
                            break;
                        default:
                            $veiksmas = "+";
                            $atsakymas = $skaicius1 + $skaicius2;
                            $veiksmasZodziais = "sudėtis";
                            break;
                    }

                    $skaicius1Kvadratas = $skaicius1 ** 2;
                    $skaicius2Kubas = $skaicius2 ** 3;
                    $vidurkis = ($skaicius1 + $skaicius2) / 2;
                    $didesnisSkaicius = ($skaicius1 > $skaicius2) ? $skaicius1 : $skaicius2;

                    echo "<tr>";
                    echo "<td>$skaicius1</td>";
                    echo "<td>$veiksmas</td>";
                    echo "<td>$skaicius2</td>";
                    echo "<td>$atsakymas</td>";
                    echo "<td>$skaicius1Kvadratas</td>";
                    echo "<td>$skaicius2Kubas</td>";
                    echo "<td>" . number_format($vidurkis, 2) . "</td>";
                    echo "<td>$didesnisSkaicius</td>";
                    echo "<td>$veiksmasZodziais</td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>
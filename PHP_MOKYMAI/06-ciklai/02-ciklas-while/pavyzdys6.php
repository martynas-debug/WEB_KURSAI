<?php

$suma = 0;
$kiekis = 0;

while ($kiekis <= 10) {
    $skaicius = rand(1, 100);
    echo "$skaicius";

    if ($skaicius % 2 == 0) {
        $suma += $skaicius;
        echo " lyginis";
    }

    echo "<br>";
    $kiekis++;
}

echo "visu lyginiu is duotu skaiciu suma = $suma";

<?php

$skaiciai = array();

for ($i = 0; $i < 100; $i++) {
    $skaiciai[$i] = rand(1, 1000);
}

foreach ($skaiciai as $skaicius) {
    echo "[$skaicius] ";
}

echo "<br><br>";

foreach ($skaiciai as $skaicius) {
    if ($skaicius % 3 == 0 && $skaicius % 5 == 0) {
        echo "skaicius, kuris dalinasi is 3 ir is 5 rastas, jis yra $skaicius <br>";
    }
}

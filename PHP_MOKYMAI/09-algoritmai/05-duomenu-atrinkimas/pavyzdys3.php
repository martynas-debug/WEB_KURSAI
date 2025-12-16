<?php

$skaiciai = array(
    array(7, 4, 5, 3, 6),
    array(4, 5, 8, 9, 3, 6, 9, 4),
    array(5, 8, 7, 2)
);

$atrinkti = array();
$atsitiktinis = rand(1, 10);

foreach ($skaiciai as $vienmatis) {
    foreach ($vienmatis as $skaicius) {
        if ($skaicius >= $atsitiktinis) {
            array_push($atrinkti, $skaicius);
        }
    }
}

echo "skaiciai didesni arba lygus $atsitiktinis: <br>";
foreach ($atrinkti as $skaicius) {
    echo "[$skaicius]";
}

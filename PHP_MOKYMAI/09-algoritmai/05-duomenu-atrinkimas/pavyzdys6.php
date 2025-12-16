<?php

$studentai = array(
    array("vardas" => "Greta", "pazymiai" => array(7, 4, 8, 9, 6)),
    array("vardas" => "Paulius", "pazymiai" => array(5, 7, 2, 6, 7, 5)),
    array("vardas" => "Povilas", "pazymiai" => array(10, 1, 7, 6, 8)),
    array("vardas" => "Gabriele", "pazymiai" => array(3, 8, 9, 7)),
);

$atrinkti = array();

foreach ($studentai as $studentas) {
    foreach ($studentas["pazymiai"] as $pazymys) {
        if ($pazymys < 5) {
            array_push($atrinkti, $pazymys);
        }
    }
}

echo "visi neigiami pazymiai: ";
foreach ($atrinkti as $pazymys) {
    echo "$pazymys ";
}

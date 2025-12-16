<?php

$studentai = array(
    array("vardas" => "Greta", "pazymiai" => array(4, 7, 8, 9, 6)),
    array("vardas" => "Paulius", "pazymiai" => array(2, 3, 5, 7, 8)),
    array("vardas" => "Povilas", "pazymiai" => array(10, 7, 7, 6, 8)),
    array("vardas" => "Gabriele", "pazymiai" => array(5, 8, 9, 7)),
);

$atrinkti = array();

foreach ($studentai as $studentas) {
    $neturiNeigiamu = true;

    foreach ($studentas["pazymiai"] as $pazymys) {
        if ($pazymys < 5) {
            $neturiNeigiamu = false;
            break;
        }
    }

    if ($neturiNeigiamu) {
        array_push($atrinkti, $studentas);
    }
}

echo "neturintys neigiamu pazymiu studentai: <br>";
foreach ($atrinkti as $stud) {
    print_r($stud);
    echo "<br>";
}

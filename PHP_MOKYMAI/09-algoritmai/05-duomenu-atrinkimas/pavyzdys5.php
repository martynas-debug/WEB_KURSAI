<?php

$zmones = array(
    array("vardas" => "Tomas", "alga" => 500),
    array("vardas" => "Greta", "alga" => 600),
    array("vardas" => "Gintare", "alga" => 300),
    array("vardas" => "Jonas", "alga" => 300),
    array("vardas" => "Paulius", "alga" => 500),
);

$suma = 0;
$kiekis = count($zmones);

foreach ($zmones as $zmogus) {
    $suma += $zmogus["alga"];
}

$vidurkis = $suma / $kiekis;
echo "vidurkis: $vidurkis <br>";

$didesniNeiVidurkis = array();

foreach ($zmones as $zmogus) {
    if ($zmogus["alga"] > $vidurkis) {
        array_push($didesniNeiVidurkis, $zmogus);
    }
}

echo json_encode($didesniNeiVidurkis);

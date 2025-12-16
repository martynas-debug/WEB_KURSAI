<?php

$zmones = array(
    array("vardas" => "Tomas", "alga" => 500),
    array("vardas" => "Greta", "alga" => 600),
    array("vardas" => "Gintare", "alga" => 300),
    array("vardas" => "Jonas", "alga" => 300),
    array("vardas" => "Paulius", "alga" => 500),
);

$atrinkti = array();

foreach ($zmones as $zmogus) {
    if ($zmogus["alga"] <= 300) {
        array_push($atrinkti, $zmogus);
    }
}

echo json_encode($atrinkti);

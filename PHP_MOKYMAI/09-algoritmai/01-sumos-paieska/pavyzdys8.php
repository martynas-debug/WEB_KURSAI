<?php

$darbuotojai = array(
    array("vardas" => "Tomas", "alga" => 500),
    array("vardas" => "Inga", "alga" => 600),
    array("vardas" => "Greta", "alga" => 400),
    array("vardas" => "Paulius", "alga" => 550),
);

$suma = 0;

foreach ($darbuotojai as $darbuotojas) {
    $suma += $darbuotojas["alga"];
}

echo "visu darbuotoju susumuota alga: $suma eur";

<?php

$automobiliai = array(
    array("marke" => "audi", "modelis" => "80", "rida" => 13458),
    array("marke" => "bmw", "modelis" => "E360", "rida" => 14887),
    array("marke" => "opel", "modelis" => "zafira", "rida" => 43149),
    array("marke" => "wolswagen", "modelis" => "beetle", "rida" => 41678),
    array("marke" => "citroen", "modelis" => "xsara", "rida" => 18795),
);

foreach ($automobiliai as $auto) {
    print_r($auto);
    echo "<br>";
}

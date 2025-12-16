<?php

$pazymiai = array(
    "Tomas" => 7,
    "Gintare" => 8,
    "Lukas" => 8,
    "Justina" => 9,
    "Gabriele" => 7,
    "Paulius" => 8,
    "Povilas" => 9
);

$suma = 0;

echo "<ul>";

foreach ($pazymiai as $key => $value) {
    $suma += $value;
    echo "<li>$key pazymys yra $value</li>";
}

echo "</ul>";

$vidurkis = $suma / count($pazymiai);
echo "visu vidurkis: $vidurkis";

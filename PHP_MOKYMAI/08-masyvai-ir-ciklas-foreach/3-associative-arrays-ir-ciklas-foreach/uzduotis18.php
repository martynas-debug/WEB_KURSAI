<?php

// Sukurkite masyvą, kuriame key vietoje būtų įrašytas studento vardas, o value
// vietoje jo vidurkis. Išveskite turimą masyvą į lentelę, nepamirškite apibūdinti
// lentelės stulpelių (įterpti th), kad būtų aišku ką kuris stulpelis reiškia. Raskite
// visų studentų pažymių vidurkį.



$pazymiai = array(
    "Gintas" => 9,
    "Saule" => 6,
    "Linas" => 7,
    "Justina" => 10,
    "Vaidas" => 8,
    "Pijus" => 7,
    "Domas" => 10,
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




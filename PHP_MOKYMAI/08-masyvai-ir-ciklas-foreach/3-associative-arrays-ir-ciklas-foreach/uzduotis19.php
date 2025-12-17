<?php

// Sukurkite masyvą, kuriame key vietoje būtų mašinos markė ir modelis, o value
// vietoje rida. Iš visų turimų automobilių raskite ridos vidurkį. Pirmoje lentelėje
// išveskite tik tuos automobilius, kurių rida yra didesnė nei gautas vidurkis, o
// antroje - mažesnis už vidurkį.


$masinos = array(
    "AUDI" => 99999,
    "CITROEN" => 6666,
    "LEXUS" => 77777,
    "BMW" => 100000,
    "KIA" => 888888,
    "KUPRA" => 777777,
    "NISAN" => 1000000,
);

$suma = 0;

echo "<ul>";

foreach ($masinos as $key => $value) {
    $suma += $value;
    echo "<li>$key rida yra $value</li>";
}

echo "</ul>";

$vidurkis = $suma / count($masinos);
echo "visu vidurkis: $vidurkis";





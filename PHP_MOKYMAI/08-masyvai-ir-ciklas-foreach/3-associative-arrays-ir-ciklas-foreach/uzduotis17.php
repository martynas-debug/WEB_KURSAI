<?php

// Sukurkite masyvą kuriame key vietoje būtų miesto pavadinimas, o value
// vietoje gyventojų skaičius. Išveskite turimą masyvą į sąrašą. Kiekvienas
// punktas turi būti suformatuotas kaip sakinys, pvz.: “Mieste {miestas} gyvena
// {gyventojų skaičius} gyventojų.”.



$miestas = array("Vilnius" => "500 000", "Los Andzelas" => "12 000 000", "New York" => "8 000 000");

foreach ($miestas as $raktas => $reiksme) {
    echo "Mieste $raktas gyvena $reiksme gyventoju <br>";
}




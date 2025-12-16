<?php

include "automobilis.php";

function SpausdintiVisus($automobiliai) {
    foreach ($automobiliai as $auto) {
        $auto->Isvedimas();
    }
}

function NaujausiasAutomobilis($automobiliai) {
    $naujausias = $automobiliai[0];

    foreach ($automobiliai as $auto) {
        if (!$naujausias->SitasNaujesnis($auto)) {
            $naujausias = $auto;
        }
    }

    return $naujausias;
}

$automobiliai = array(
    new Automobilis("RTyuj", "ssgh", 25545, 2016, 1.2),
    new Automobilis("sbajfbdjgb", "HUhsbgdg", 8487879, 1980, 2.0),
    new Automobilis("JHsjbg", "shhdg", 54889, 2018, 1.6),
    new Automobilis("Pajd", "hVGvgv", 54878, 2010, 1.8)
);

echo "<h2>Visi automobiliai</h2>";
SpausdintiVisus($automobiliai);

echo "<h2>Naujausias automobilis</h2>";
$naujausias = NaujausiasAutomobilis($automobiliai);
$naujausias->Isvedimas();

echo "<h2>Naujausias automobilis</h2>";
NaujausiasAutomobilis($automobiliai)->Isvedimas();

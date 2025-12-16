<?php

include "darbuotojas.php";

$petras = new Darbuotojas("Petras", "Petrauskas", 60, "pencininku", 400);
$gytis = new Darbuotojas("Gytis", "Gytauskas", 25, "gaisrininku", 600);

$petras->Isvedimas();
$gytis->Isvedimas();

echo "<br>pakeisti duomenys: <br>";
$petras->setVardas("nebepetras");
$petras->setProfesija("mediku");
$petras->Isvedimas();

echo "<br>siaip atskiri duomenys: <br>";
echo $petras->getPavarde() . "<br>";
echo $gytis->getAlga() . "<br>";

<?php

class Automobilis {
    public $marke;
    public $modelis;
    public $rida;
    public $metai;
}

$auto = new Automobilis();

$auto->marke = "Kazkokia";
$auto->modelis = "Aikazinau";
$auto->rida = 23000;
$auto->metai = 2016;

echo "marke: " . $auto->marke . "<br>"
    . "modelis: " . $auto->modelis . "<br>"
    . "rida: " . $auto->rida . "<br>"
    . "metai: " . $auto->metai . "<br>";

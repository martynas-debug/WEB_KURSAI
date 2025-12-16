<?php

class Automobilis {
    public $marke;
    public $modelis;
    public $metai;
    public $rida;

    public function Spausdinti() {
        echo "marke: " . $this->marke . "<br>" . "modelis: " . $this->modelis . "<br>"
            . "metai: " . $this->metai . "<br>" . "rida: " . $this->rida . "<br>";
    }
}

$auto = new Automobilis();

$auto->marke = "Majsj";
$auto->modelis = "jsbgdfj";
$auto->metai = 2018;
$auto->rida = 1000;

$auto->Spausdinti();

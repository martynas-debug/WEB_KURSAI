<?php

class Zmogus {
    public $vardas;
    public $pavarde;
    public $amzius;
    public $ugis;

    public function __construct($vardas, $pavarde, $amzius, $ugis) {
        $this->vardas = $vardas;
        $this->pavarde = $pavarde;
        $this->amzius = $amzius;
        $this->ugis = $ugis;
    }

    public function Informacija() {
        echo $this->vardas . " " . $this->pavarde . " " . $this->amzius
            . " " . $this->ugis . "<br>";
    }
}

$zmogus = new Zmogus("Gabriele", "Gabryte", 18, 1.6);
$zmogus->Informacija();

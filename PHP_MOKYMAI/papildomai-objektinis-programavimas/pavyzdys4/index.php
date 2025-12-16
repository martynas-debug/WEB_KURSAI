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
}

$zmogus = new Zmogus("Petras", "Petrauskas", 55, 1.8);

echo $zmogus->vardas . " " . $zmogus->pavarde . " " . $zmogus->amzius
    . " " . $zmogus->ugis . "<br>";

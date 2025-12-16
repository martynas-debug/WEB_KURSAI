<?php

class Automobilis {
    private $marke;
    private $modelis;
    private $rida;
    private $metai;
    private $darbinisTuris;

    public function __construct($marke, $modelis, $rida, $metai, $darbinisTuris) {
        $this->marke = $marke;
        $this->modelis = $modelis;
        $this->rida = $rida;
        $this->metai = $metai;
        $this->darbinisTuris = $darbinisTuris;
    }

    public function Isvedimas() {
        echo "automobilis $this->marke $this->modelis ($this->metai m.) nuvaziavo $this->rida km, ";
        echo "jo darbinis turis $this->darbinisTuris <br>";
    }

    public function SitasNaujesnis($kitasAuto) {
        if ($this->metai > $kitasAuto->metai) {
            return true;
        }
        return false;
    }
}

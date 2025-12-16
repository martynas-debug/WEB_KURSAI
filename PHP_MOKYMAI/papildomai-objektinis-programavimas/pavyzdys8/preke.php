<?php

class Preke {
    private $pavadinimas;
    private $savikaina;
    private $kaina;
    private $kodas;

    public function __construct($pavadinimas, $savikaina, $kaina, $kodas) {
        $this->pavadinimas = $pavadinimas;
        $this->savikaina = $savikaina;
        $this->kaina = $kaina;
        $this->kodas = $kodas;
    }

    public function Isvedimas() {
        echo "<tr>"
            . "<td>$this->pavadinimas</td>"
            . "<td>$this->savikaina</td>"
            . "<td>$this->kaina</td>"
            . "<td>$this->kodas</td>"
            . "</tr>";
    }

    public function Pelnas() {
        return $this->kaina - $this->savikaina;
    }
}

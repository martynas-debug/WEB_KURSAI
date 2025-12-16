<?php

require_once "preke.php";

class Parduotuve {
    private $pavadinimas;
    private $prekes;

    public function __construct($pavadinimas, $prekes) {
        $this->pavadinimas = $pavadinimas;
        $this->prekes = $prekes;
    }

    public function Isvedimas() {
        echo "Parduotuve $this->pavadinimas turi sias prekes:";
        echo '<table border="1">';
        echo "<tr>"
            . "<th>Pavadinimas</th>"
            . "<th>Savikaina, eur</th>"
            . "<th>Kaina, eur</th>"
            . "<th>Kodas</th>"
            . "</tr>";
        foreach ($this->prekes as $preke) {
            $preke->Isvedimas();
        }
        echo "</table>";
        echo "<p>Bendras prekiu pelnas: " . $this->BendrasPelnas() . " eur</p>";
    }

    public function BendrasPelnas() {
        $pelnas = 0.0;

        foreach ($this->prekes as $preke) {
            $pelnas += $preke->Pelnas();
        }

        return $pelnas;
    }
}

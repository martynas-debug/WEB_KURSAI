<?php

class Darbuotojas {
    private $vardas;
    private $pavarde;
    private $amzius;
    private $profesija;
    private $alga;

    public function __construct($vardas, $pavarde, $amzius, $profesija, $alga) {
        $this->vardas = $vardas;
        $this->pavarde = $pavarde;
        $this->amzius = $amzius;
        $this->profesja = $profesija;
        $this->alga = $alga;
    }

    public function Isvedimas() {
        echo "darbuotojas " . $this->vardas . " " . $this->pavarde
            . ", kurio amzius " . $this->amzius . " metu, dirba "
            . $this->profesija . ", jo alga siekia "
            . $this->alga . " eur/men. <br>";
    }

    public function getVardas()
    {
        return $this->vardas;
    }

    public function setVardas($vardas)
    {
        $this->vardas = $vardas;

        return $this;
    }

    public function getPavarde()
    {
        return $this->pavarde;
    }

    public function setPavarde($pavarde)
    {
        $this->pavarde = $pavarde;

        return $this;
    }

    public function getAmzius()
    {
        return $this->amzius;
    }

    public function setAmzius($amzius)
    {
        $this->amzius = $amzius;

        return $this;
    }

    public function getProfesija()
    {
        return $this->profesija;
    }

    public function setProfesija($profesija)
    {
        $this->profesija = $profesija;

        return $this;
    }

    public function getAlga()
    {
        return $this->alga;
    }

    public function setAlga($alga)
    {
        $this->alga = $alga;

        return $this;
    }
}

<?php
//Persoon.php

class Persoon {

    private $familienaam;
    private $voornaam;

    public function getVollNaam() {
        return $this->familienaam . ", " . $this->voornaam;
    }

    public function setFamilienaam($familienaam) {
        $this->familienaam = $familienaam;
    }

    public function setVoornaam($voornaam) {
        $this->voornaam = $voornaam;
    }

}

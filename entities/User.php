<?php

class User {

    private $gebruikersnaam;
    private $paswoord;
    
    
    public function __construct($gebruikersnaam, $paswoord) {
        $this->gebruikersnaam = $gebruikersnaam;
        $this->paswoord = $paswoord;
    }

    public function getGebruikersnaam() {
        return $this->gebruikersnaam;
    }

    public function getPaswoord() {
        return $this->paswoord;
    }

}

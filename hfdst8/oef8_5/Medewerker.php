<?php

//Medewerker.php

require_once 'Persoon.php';

class Medewerker extends Persoon {

    private $aantalCursisten;

    public function __construct($familienaam, $voornaam, $aantalCursisten) {
        parent::setFamilienaam($familienaam);
        parent::setVoornaam($voornaam);
        $this->aantalCursisten = $aantalCursisten;
    }

    public function getAantalCursisten() {
        return $this->aantalCursisten;
    }

    public function setAantalCursisten($aantalCursisten) {
        $this->aantalCursisten = $aantalCursisten;
    }

}

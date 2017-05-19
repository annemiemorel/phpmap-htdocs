<?php

//Medewerker.php

require_once 'Persoon.php';

class Medewerker extends Persoon {

    private $aantalCursisten;

    public function getAantalCursisten() {
        return $this->aantalCursisten;
    }

    public function setAantalCursisten($aantalCursisten) {
        $this->aantalCursisten = $aantalCursisten;
    }

}

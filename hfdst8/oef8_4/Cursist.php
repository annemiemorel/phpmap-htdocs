<?php

//Cursist.php

require_once 'Persoon.php';

class Cursist extends Persoon {

    private $aantalCursussen;

    public function getAantalCursussen() {
        return $this->aantalCursussen;
    }

    public function setAantalCursussen($aantalCursussen) {
        $this->aantalCursussen = $aantalCursussen;
    }

}

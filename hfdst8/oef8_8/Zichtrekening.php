<?php

//Zichtrekening.php

require_once 'Rekening.php';

class Zichtrekening extends Rekening {

    private static $intrest = 0.025;

    public function __construct($rekeningnummer) {
        parent::setRekeningnummer($rekeningnummer);
    }

    public function voerIntrestDoor() {
        parent::stort(parent::getSaldo() * self::$intrest);
    }

    public function getOmschrijving() {
        return "Kortetermijnrekening";
    }

}

<?php

//Spaarrekening.php

require_once 'Rekening.php';

class Spaarrekening extends Rekening {

    private static $intrest = 0.03;

    public function __construct($rekeningnummer) {
        parent::setRekeningnummer($rekeningnummer);
    }

    public function voerIntrestDoor() {
        parent::stort(parent::getSaldo() * self::$intrest);
    }

}

<?php

class Rekening {

    private static $intrest = 0.03;
    private $rekeningnummer;
    private $saldo;

    public function __construct($rekeningnummer) {
        $this->rekeningnummer = $rekeningnummer;
        $this->saldo = 0;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function stort($bedrag) {
        $this->saldo = $this->saldo + $bedrag;
    }

    public function voerIntrestDoor() {
        $this->saldo = $this->saldo + ($this->saldo * self::$intrest);
    }

}

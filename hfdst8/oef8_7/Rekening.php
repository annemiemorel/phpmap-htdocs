<?php

//Rekening.php

abstract class Rekening {

    private $rekeningnummer;
    private $saldo = 0;

    public function getSaldo() {
        return $this->saldo;
    }

    public function stort($bedrag) {
        $this->saldo = $this->saldo + $bedrag;
    }

    public function setRekeningnummer($rekeningnummer) {
        $this->rekeningnummer = $rekeningnummer;
    }

    public abstract function voerIntrestDoor();
}

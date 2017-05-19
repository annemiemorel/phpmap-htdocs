<?php

class Munt {

    private $rijnummer;
    private $kolomnummer;
    private $status;
    
    public function __construct($rijnummer, $kolomnummer, $status) {
        $this->rijnummer = $rijnummer;
        $this->kolomnummer = $kolomnummer;
        $this->status= $status;
        
    }

    public function getRijnummer() {
        return $this->rijnummer;
    }

    public function getKolomnummer() {
        return $this->kolomnummer;
    }

    public function getStatus() {
        return $this->status;
    }
            
}

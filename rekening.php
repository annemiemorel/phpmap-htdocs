<?php

Class Rekening{
    private $rekeningnr;
    private $saldo=0;
    private $intrest=0.03;
    
    public function __construct($rekeningnr){
        $this->rekeningnr=$rekeningnr;
    }
    public function getSaldo(){
        $saldo=$this->saldo;
        return $saldo;
    }
    public function stort($saldo){
        $this->saldo=$saldo;
    }
    public function voerIntrestDoor(){
        $intrest=$this->intrest;
        $saldo=$this->saldo;
        //echo $intrest;
        $this->saldo=$saldo*(1+$intrest);
        //return $saldo;
    }
}
//$rek= new Rekening();

?>
<!DOCTYPE HTML> 
<html> 
    <head> 
        <meta charset=utf-8> 
        <title>Rekeningnummers</title> 
    </head> 
    <body> 
        <h1> 
            <?php 
            $rek = new Rekening("091-0122401-16"); 
            print("Het saldo is: " .$rek->getSaldo() . "<br />"); 
            $rek->stort(200); 
            print("Het saldo is: " .$rek->getSaldo() . "<br />"); 
            $rek->voerIntrestDoor();
            print("Het saldo is: " .$rek->getSaldo() . "<br />"); 
            ?> 
        </h1> 
    </body> 
</html>

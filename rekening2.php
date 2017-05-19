<?php

Class Rekening{
    private $rekeningnr;
    protected $saldo=0;
    
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
    
   
}
Class Zichtrekening extends Rekening{
    private static $intrest=0.025;
    
    public function __construct($rekeningnr){
        
    }
    public function voerIntrestDoor(){
        parent::stort(parent::getSaldo()*(1+self::$intrest));
    }
}
Class Spaarrekening extends Rekening{
    private static $intrest=0.03;
    
    public function voerIntrestDoor(){
        parent::stort(parent::getSaldo()*(1+self::$intrest));
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
            <?php print("<h2>Zichtrekening</h2>");
            $rek = new ZichtRekening("091-0122401-16"); 
            print("Het saldo is: " .$rek->getSaldo() . "<br />"); 
            $rek->stort(200); 
            print("Het saldo is: " .$rek->getSaldo() . "<br />"); 
            $rek->voerIntrestDoor();
            print("Het saldo is: " .$rek->getSaldo() . "<br />"); 
            print("<h2>Spaarrekening</h2>");
            $rek = new SpaarRekening("091-0122401-16"); 
            print("Het saldo is: " .$rek->getSaldo() . "<br />"); 
            $rek->stort(200); 
            print("Het saldo is: " .$rek->getSaldo() . "<br />"); 
            $rek->voerIntrestDoor();
            print("Het saldo is: " .$rek->getSaldo() . "<br />"); 
            ?> 
        </h1> 
    </body> 
</html>

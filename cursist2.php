<?php 
//cursistenEnMedewerkers.php 
class Personen{
    private $voornaam;
    private $familienaam;
    private $vollnaam;
    private $aantal;
    
    public function __construct($familienaam, $voornaam, $aantal){
        $this->familienaam=$familienaam;
        $this->naam=$voornaam;
        $this->aantal=$aantal;
    }
            
    public function setVoornaam($voornaam){
        $this->naam=$voornaam;
    }
    public function setFamilienaam($familienaam){
        $this->familienaam=$familienaam;
    }
    
    public function getVollNaam(){
        $vollnaam=$this->familienaam . " , ". $this->naam;
        return $vollnaam;
    }
    public function getAantalCursussen(){
        $aantal=$this->aantal;
        return $aantal;
    }
    public function getAantalCursisten(){
         $aantal=$this->aantal;
         return $aantal;
      }
}
class Cursist extends Personen{
               
}
class Medewerker extends Personen{     
      
}

$cursist = new Cursist("Peeters", "Jan", 3); 
$medewerker = new Medewerker("Janssens", "Tom", 8); 
?> 
<!DOCTYPE HTML> 
<html> 
    <head> 
        <meta charset=utf-8> 
        <title>Cursisten en medewerkers</title> 
    </head> 
    <body> 
    <h1>Namen</h1> 
        <ul> 
            <li><?php print($cursist->getVollNaam() . " volgt " . $cursist->getAantalCursussen() . " cursus(sen)");?></li> 
            <li><?php print($medewerker->getVollNaam() . " begeleidt " . $medewerker->getAantalCursisten() . " cursist(en)");?></li> 
        </ul> 
    </body> 
</html>




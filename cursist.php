<?php 
//cursistenEnMedewerkers.php 
class Cursist{
    private $voornaam;
    private $familienaam;
    private $vollnaam;
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
           
}
class Medewerker{
     private $voornaam;
    private $familienaam;
    private $vollnaam;
    public function setVoornaam($voornaam){
        $this->naam=$voornaam;
    }
    public function setFamilienaam($familienaam){
        $this->familienaam=$familienaam;
    }
    public function getVollNaam(){
        $vollnaam=$this->familienaam . " , " . $this->naam;
        return $vollnaam;
    }
           
}
$cursist = new Cursist(); 
$medewerker = new Medewerker(); 
$cursist->setFamilienaam("Peeters"); 
$cursist->setVoornaam("Jan"); 
$medewerker->setFamilienaam("Janssens"); 
$medewerker->setVoornaam("Tom"); 
?> 
<!DOCTYPE HTML> 
<html> 
<head> 
<title>Cursisten en medewerkers</title> 
</head> 
<body> 
<h1>Namen</h1> 
<ul> 
<li><?php print($cursist->getVollNaam());?></li> 
<li><?php print($medewerker->getVollNaam());?></li> 
</ul> 
</body> 
</html>



<?php
//auto.php

class Thermometer {
 private $temperatuur;
 
 public function setTemp($aantalGraden){
         $this->temperatuur = $aantalGraden;
 }
 public function getTemp(){
     return $this->temperatuur;
 }        
 public function verhoog($aantalGraden) {
     return $this->temperatuur+$aantalGraden;
 }
 
 public function verlaag($aantalGraden) {
  return $this->temperatuur-$aantalGraden;
 }
}

$temp = new Thermometer();
$temp->setTemp(20);

?>


<!DOCTYPE HTML>
<html>
 <head>
  <meta charset=utf-8>
  <title>Klassen in de praktijk</title>
 </head>
 <body>
     <h1>Thermometer</h1>
  Geeft huidge temperatuur:
  <?php print($temp->getTemp());?>
  <br />
  Beetje warmer: <?php print($temp->verhoog(5));?>
  <br>
  Beetje kouder: <?php print($temp->verlaag(4));?>
</body>
</html>  

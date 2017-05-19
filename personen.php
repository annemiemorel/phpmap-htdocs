<?php
//personen.php

class Persoon {
 private $naam;
 public $leeftijd; //variabele kan foutief ingegeven worden, zonder controle als public
                    // dit vermijden door $leeftijd private te maken
  
 public function getNaam() {
  return $this->naam;
 }
 
 public function getLeeftijd() {
  return $this->leeftijd;
 }
 
 public function setNaam($naam) {
  if($naam != ""){
   $this->naam= $naam;
  } else {
   $this->naam="anoniem";
  }
 }
 
 public function setLeeftijd($leeftijd) {
  if($leeftijd > 0){
   $this->leeftijd = $leeftijd;
  } else {
   $this->leeftijd = 0;
  }
 }
}
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Personen</title>
    </head> 
    <body>
  <?php
  $persoon = new Persoon();
  
  /*via setter:*/
  $persoon->setLeeftijd(20);  //geldige leeftijd 
  $persoon->setLeeftijd(-15);  //geen geldige leeftijd; wordt opgevangen
      //en gecorrigeerd
  /*rechtstreeks via publieke variabele:*/
  $persoon->leeftijd = 20;  //geldige leeftijd
  $persoon->leeftijd = -15; //geen geldige leeftijd; niet opgevangen
  ?>
    </body>
</html>

<?php
//auto.php

class Auto {
 private $kleur;
 private $aantalDeuren;
 private $verbruik;
 
 //getters
 public function getKleur() {
  return $this->kleur;
 }
 
 public function getAantalDeuren() {
  return $this->aantalDeuren;
 }
 
 public function getVerbruik() {
  return $this->verbruik;
 }
 
 //setters
 public function setKleur($eenKleur) {
  $this->kleur= $eenKleur;
 }
 
 public function setAantalDeuren($aantalDeuren) {
  $this->aantalDeuren= $aantalDeuren;
 }
 
 public function setVerbruik($eenVerbruik) {
  $this->verbruik= $eenVerbruik;
 }

}
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Auto's</title>
    </head>
    <body>
  <?php
   $auto1 = new Auto();
   $auto1->setKleur("rood");
   print("auto1 : " . $auto1->getKleur());   
   print('<br />');
   $auto2 = new Auto();
   $auto2->setKleur("groen");
   print("auto2 : " . $auto2->getKleur());
  ?>
    </body>
</html> 


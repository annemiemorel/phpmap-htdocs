<?php
//auto.php

class Thermometer {
 private $temperatuur=18;
 
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

if(isset($_GET["warmer"])){
    $temp->setTemp($temp->verhoog($_GET["warmer"]));
    echo "warmer";
}
if(isset($_GET["kouder"])){
    $temp->setTemp($temp->verlaag($_GET["kouder"]));
    echo "kouder";
}
?>


<!DOCTYPE HTML>
<html>
 <head>
  <meta charset=utf-8>
  <title>Klassen in de praktijk</title>
 </head>
 <body>
     <h1>Thermometer</h1>
  <h2>Geeft huidge temperatuur: <div style="color: red;">
  <?php print($temp->getTemp());?></div></h2>
  <br />
  <form action="thermometer2.php" method="get"> 
    Geef temperatuur: <input type="text" name="warmer"  /> 
    <input type="submit" value="Warmer" /> 
</form> 
  <form action="thermometer2.php" method="get"> 
    Geef temperatuur: <input type="text" name="kouder"  /> 
    <input type="submit" value="Kouder" /> 
</form> 
</body>
</html>  

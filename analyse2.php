<?php //analyse.php 
class Oefening { 
    public function getAnalyse($getal1, $getal2) {
       if($getal1>$getal2){
           return "Het eerste getal is groter dan het tweede";
       }
       elseif($getal2>$getal1){
           return "Het eerste getal is kleiner dan het tweede";
       }
       else{
           return "Het eerste getal is gelijk aan het tweede";
       }
    }    
 }
 ?> 
<!DOCTYPE HTML> 
<html> 
    <head> 
        <meta charset=utf-8> 
        <title>Analyse</title> 
    </head> 
    <body> 
        <h1> <?php $oef = new Oefening(); print($oef->getAnalyse(7, 2)); ?> </h1> 
        <h1> <?php $oef2 = new Oefening(); print($oef2->getAnalyse(2, 7)); ?> </h1> 
        <h1> <?php $oef3 = new Oefening(); print($oef3->getAnalyse(7, 7)); ?> </h1> 
    </body> 
</html>
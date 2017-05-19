<?php //random.php 
class Oefening { 
    public function getRandom($getal1) {
       
       $getal=rand(1,10);
       //echo "Random getal = " . $getal . "<br>";
       if($getal==$getal1){
           print"Je gok was juist!";
       }
        elseif($getal1>10 or $getal1<1) {
            echo"Geef een getal tussen 1 en 10.";
        }
        else{
           echo "Je gokte " . $getal1 . ". Het juiste antwoord was " . $getal . ".";
       }
        
        return;
    }    
 }
 ?> 
<!DOCTYPE HTML> 
<html> 
    <head> 
        <meta charset=utf-8> 
        <title>random</title> 
    </head> 
    <body> 
        <h1> <?php $oef = new Oefening(); print($oef->getRandom($_GET["getal1"])); ?> </h1> 
        
        
    </body> 
</html>
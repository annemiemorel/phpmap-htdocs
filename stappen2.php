<?php //stappen.php 
class Oefening { 
    public function getStappenper2() {
       for($i=20;$i<=50;$i++){
           echo $i ."\n";
           $i++;
        } 
        return;
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
        <h1> <?php $oef = new Oefening(); print($oef->getStappenper2()); ?> </h1> 
        
        
    </body> 
</html>
<?php //stappen.php 
class Oefening { 
    public function getStappen() {
       for($i=20;$i<=50;$i++){
           echo $i."\n";
           
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
        <h1> <?php $oef = new Oefening(); print($oef->getStappen()); ?> </h1> 
        
        
    </body> 
</html>
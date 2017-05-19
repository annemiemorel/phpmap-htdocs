<?php //stappen.php 
class Oefening { 
    public function getRandom() {
       $getal=rand(10,20);
       echo "Getallen van 1 tot ".$getal."<br>";
       for($i=1;$i<=$getal;$i++){
           echo $i ."<br>";
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
        <h1> <?php $oef = new Oefening(); print($oef->getRandom()); ?> </h1> 
        
        
    </body> 
</html>
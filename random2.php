<?php //random.php 
class Oefening { 
    public function getRandom() {
       $getal=rand(1,1000);
        echo $getal ."<br>";
        while($getal<=600){
            $getal=rand(1,1000);
            echo $getal ."<br>";
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
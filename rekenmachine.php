<?php //rekenmachine.php 
class Rekenmachine { 
    public function getKwadraat($getal) 
            { $kwad = $getal * $getal; 
            return $kwad; } 
            
    } 
?> 
<!DOCTYPE HTML> 
<html> 
    <head> 
        <meta charset=utf-8> 
        <title>Rekenmachine</title> 
    </head> 
    <body> 
        <h1> <?php $reken = new Rekenmachine(); print($reken->getKwadraat(5)); ?> </h1> 
    </body> 
</html>

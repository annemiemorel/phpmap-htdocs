<?php //rekenmachine.php 
class Rekenmachine { 
    public function getKwadraat($getal) 
            { $kwad = $getal * $getal; 
            return $kwad; } 
            
    
    /* Berekent de som van twee meegegeven getallen. Dit is een tweede zelfgeschreven functie. */ 
    public function getSom($getal1, $getal2) { 
        $resultaat = $getal1 + $getal2; 
        return $resultaat; }
        
     
    public function getProduct($getal1, $getal2) { 
        $resultaat = $getal1 * $getal2; 
        return $resultaat; }
        
    } 
?> 
<!DOCTYPE HTML> 
<html> 
    <head> 
        <meta charset=utf-8> 
        <title>Rekenmachine</title> 
        <style type="text/css"> h1 { color: red; } </style>
    </head> 
    <body> 
        <h1> <?php $reken = new Rekenmachine(); print($reken->getKwadraat(5)); ?> </h1> 
        <h1> <?php print($reken->getSom(65, 8)); ?> </h1>
        <h1> <?php print($reken->getSom(34, 55)); ?> </h1>
        <h1> <?php print($reken->getProduct(3,4)); ?> </h1>
    </body> 
</html>

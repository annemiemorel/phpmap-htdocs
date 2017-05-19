<?php //switch.php 
class Oefening { 
    public function getSwitch($getal) {
       switch ($getal) {
    case 1:
        return "Een";
        break;
    case 2:
        return "Twee";
        break;
    case 3:
        return "Drie";
        break;
    case 4:
        return "Vier";
        break;
    case 5:
        return "Vijf";
        break;
    default:
        return $getal;
        break;
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
        <h1> <?php $oef = new Oefening(); print($oef->getSwitch(2)); ?> </h1> 
        <h1> <?php $oef2 = new Oefening(); print($oef2->getSwitch(7)); ?> </h1> 
        
    </body> 
</html>
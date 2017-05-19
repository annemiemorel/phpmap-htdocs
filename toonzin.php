<?php
//toongetallen.php

require_once("ToonZinMaker.php");
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Zin constructie</title>
    </head>
    <body>
        
        <?php
        $toonZinMaker = new ToonZinMaker();
        $zin = $toonZinMaker->getZin();
        ?>
       
        <!-- De presentatielaag dient aangepast te worden. -->
        <div style="border:blue 1px solid; text-align:center">
            
            <?php for($i=1;$i<=7;$i++){ ?>
            <div style="font-size:<?php print($i*10); ?>px"> <?php print($zin);?> 
            </div> 
            <?php } ?>
            <?php for($i=6;$i>=1;$i--){ ?>
            <div style="font-size:<?php print($i*10); ?>px"> <?php print($zin);?> 
            </div> 
            <?php } ?>
        </div> 
    
    </body>
</html>

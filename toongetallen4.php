<?php 
//toongetallen.php 
require_once("GetallenReeksMaker2.php"); 
?> 
<!DOCTYPE HTML> 
<html> 
    <head> 
        <meta charset=utf-8> 
        <title>Getallenreeks</title> 
    </head> 
    <body> 
        <?php 
        $getallenReeksMaker = new GetallenReeksMaker2(); 
        $tabel = $getallenReeksMaker->getReeks(); 
        ?> 
        <table border="1"> 
            <tbody> 
                
                <tr> 
                    <?php 
                    foreach ($tabel as $getal) { ?>
                    <td>  <?php
                        print($getal);?> 
                    </td>
                    <?php
                    }
                    ?>
                </tr> 
               
            </tbody> 
        </table> 
    </body> 
</html>


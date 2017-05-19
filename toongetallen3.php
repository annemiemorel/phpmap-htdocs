<?php 
//toongetallen.php 
require_once("GetallenReeksMaker3.php"); 
?> 
<!DOCTYPE HTML> 
<html> 
    <head> 
        <meta charset=utf-8> 
        <title>Getallenreeks</title> 
    </head> 
    <body> 
        <?php 
        $getallenReeksMaker = new GetallenReeksMaker3(); 
        $tabel = $getallenReeksMaker->getReeks(); 
        ?> 
        <table border="1"> 
            <tbody> 
                <?php 
                foreach ($tabel as $getal) { 
                ?> 
                <tr> 
                    <td> 
                    <?php print($getal);?> 
                    </td> 
                </tr> 
                <?php 
                } 
                ?> 
            </tbody> 
        </table> 
    </body> 
</html>


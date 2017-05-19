<?php 
//cookies.php 
if (!empty($_POST["grondTal"])) { 
//setcookie("ingevuldeNaam", $_POST["txtNaam"], time() + 120); 
$grondtal = $_POST["grondTal"]; 
} else { 
$grondtal=""; 
} 
?> 
<!DOCTYPE HTML> 
<html> 
    <head> 
        <meta charset=utf-8> 
        <title>Tafels</title> 
    </head> 
    <body> 
        
        <table border="1" > 
            <tbody >
                <tr>
                    <td colspan="2" style="font-weight: bold;">De tafel van <?php print($grondtal); ?></td>
                </tr>
                    <?php 
                    for($i=1;$i<=10;$i++) { ?>
                <tr> 
                    <td style="padding: 0.25em;" >
                        <?php print($i . " maal " . $grondtal);?>
                    </td>
                    <td style="padding: 0.25em;">  
                        <?php print($grondtal*$i);?> 
                    </td>
                    
                </tr> 
               <?php
                    }
                    ?>
            </tbody> 
        </table> 
    </body> 
</html>


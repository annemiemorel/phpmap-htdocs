<?php 
//start_session();
require_once 'BerichtLijst.php';
//require_once 'FilmsAanpassen3.php';

$bericht = new BerichtLijst();
if (isset($_GET["action"]) && $_GET["action"] == "new") {
    
    $bericht->createBericht($_POST["auteur"], $_POST["boodschap"]);  
    
}
if (isset($_GET["action"]) && $_GET["action"] == "delete") {
    $bericht->deleteBericht($_GET["id"]);
}
//$tijd = time(); 
//$datum = strftime("%d-%m-%y %H:%M", $tijd);
?>

<!DOCTYPE HTML> 
<html> 
    <head> 
        <meta charset=utf-8> 
        <title>gastenboek</title> 
    </head> 
    <body> 
        <h1>Berichten</h1>
        <?php 
        
        $pl = new BerichtLijst(); 
        
        $lijst = $pl->getBericht(); 
        rsort($lijst);
        ?> 
        <ul> 
        <?php 
        //print_r($lijst); // $naam[titel];
        foreach ($lijst as $value) { 
           
            ?>
                <li style="list-style: none">
                   
                    <div style="font-weight:bold"> Auteur:  <a href="Gastenboek.php?action=delete&id=<?php print($value->getId()); ?>"><?php print($value->getAuteur()); ?></a></div>
                    <div style="font-style:italic"><?php print($value->getBoodschap()); ?> </div>
                    <div style="font-style:italic"><?php print($value->getDatum()); ?> </div>
                    <hr>

                </li>
                <?php
            }
            ?>
        </ul> 
        <h1>Boodschap toevoegen</h1>
        
        <form action="Gastenboek.php?action=new" method="post"> 
            Auteur: <input type="text" name="auteur" value="" required > 
            <br><br>
            Boodschap: <input  type="text" cols="40" rows="5" style="width:300px; height:50px;"  name="boodschap" value="" maxlength="200" required > 
            
            <br>
            <br>
            <input type="submit" value="Toevoegen" /> 
        </form> 
       
            
    </body> 
</html>



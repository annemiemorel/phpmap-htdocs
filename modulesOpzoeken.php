<?php 
//start_session();


require_once 'ModuleLijst.php';
?>

<!DOCTYPE HTML> 
<html> 
    <head> 
        <meta charset=utf-8> 
        <title>modules opzoeken</title> 
    </head> 
    <body> 
        <h1>Zoekresultaat</h1>
        <?php 
        $pl = new ModuleLijst(); 
        $tab = $pl->getLijst(); 
        ?> 
        <ul> 
        <?php 
        foreach ($tab as $naam) { 
            print("<li>" . $naam . "</li>"); 
        } 
        ?> 
        </ul> 
    </body> 
</html>



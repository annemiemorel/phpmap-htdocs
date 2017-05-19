<?php 
//start_session();
require_once 'FilmLijst.php';
require_once 'FilmsToevoegen.php';

$filmlijst = new FilmsToevoegen();
if (isset($_GET["action"]) && $_GET["action"] == "new") {
    $filmlijst->createFilm($_POST["titel"], $_POST["duurtijd"]);
}
?>

<!DOCTYPE HTML> 
<html> 
    <head> 
        <meta charset=utf-8> 
        <title>films opzoeken</title> 
    </head> 
    <body> 
        <h1>Zoekresultaat</h1>
        <?php 
        $pl = new FilmLijst(); 
        $tab = $pl->getLijst(); 
        ?> 
        <ul> 
        <?php 
        foreach ($tab as $naam) { 
            print("<li>" . $naam . "</li>"); 
        } 
        ?> 
        </ul> 
        <h1>Film toevoegen</h1>
        
        <form action="filmsOpzoeken.php?action=new" method="post"> 
            Titel: <input type="text" name="titel" value="" /> 
            <br><br>
            Duurtijd: <input type="text" name="duurtijd" value="" /> minuten
            <br>
            <br>
            <input type="submit" value="Toevoegen" /> 
        </form> 
       
            
    </body> 
</html>



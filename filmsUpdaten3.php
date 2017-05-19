<?php
require_once 'FilmLijst3.php';
require_once 'FilmsAanpassen3.php';
//require_once 'Film.php';




if (isset($_GET["action"]) && $_GET["action"] == "change") {
//    $film = new Film();
    $filmactie = new FilmsAanpassen();
     $filmactie->updateFilm($_GET["id"], $_GET["titel"], $_GET["duurtijd"]);
     
//     print "postactie = update" . $_GET["duurtijd"];
}

?>
<!DOCTYPE HTML> 
<html> 
    <head> 
        <meta charset=utf-8> 
        <title>films opzoeken</title> 
    </head> 
    <body> 
        <h1>Wijzig gegevens film</h1>
        
         <br>
        <form action="filmsUpdaten3.php?action=change" method="get"> 
            <input type="hidden" name="action" value="change">
            <input type="hidden" name="id" value="<?php print $_GET["id"] ;?>">
            Titel: <input type="text" name="titel" value="<?php print $_GET["titel"] ;?>" /> 
            <br><br>
            Duurtijd: <input type="text" name="duurtijd" value="<?php print $_GET["duurtijd"] ;?>" /> minuten
            <br>
            <br>
            <input type="submit" value="Wijzigen" /> 
        </form> 
         <a href="filmsOpzoeken3.php">Terug naar opzoeken</a></td>
    </body>
</html>
<?php 
//start_session();
require_once 'FilmLijst3.php';
require_once 'FilmsAanpassen3.php';

$filmactie = new FilmsAanpassen();
if (isset($_GET["action"]) && $_GET["action"] == "new") {
    $filmactie->createFilm($_POST["titel"], $_POST["duurtijd"]);
}
if (isset($_GET["action"]) && $_GET["action"] == "delete") {
    $filmactie->deleteFilm($_GET["id"]);
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
        //print_r($tab); // $naam[titel];
        foreach ($tab as $naam) { 
            ?>
                <li>
                    <?php print($naam->getTitel()); ?>
                    (<?php print($naam->getDuurtijd()); ?> min)
                    <a href="filmsOpzoeken3.php?action=delete&id=<?php print($naam->getId()); ?>">
                        <img src="images/delete.png" /></a>
                    <a href="filmsUpdaten3.php?action=update&id=<?php print($naam->getId()); ?>&titel=<?php print($naam->getTitel()); ?>&duurtijd=<?php print($naam->getDuurtijd()); ?>">
                       Wijzig inhoud</a>
                </li>
                <?php
            }
            ?>
        </ul> 
        <h1>Film toevoegen</h1>
        
        <form action="filmsOpzoeken3.php?action=new" method="post"> 
            Titel: <input type="text" name="titel" value="" /> 
            <br><br>
            Duurtijd: <input type="text" name="duurtijd" value="" /> minuten
            <br>
            <br>
            <input type="submit" value="Toevoegen" /> 
        </form> 
       
            
    </body> 
</html>



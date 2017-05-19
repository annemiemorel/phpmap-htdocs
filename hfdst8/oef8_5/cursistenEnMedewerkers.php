<?php
//cursistenEnMedewerkers.php

require_once ('Medewerker.php');
require_once ('Cursist.php');

$cursist = new Cursist("Peeters", "Jan", 3);
$medewerker = new Medewerker("Janssens", "Tom", 8);
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cursisten en medewerkers</title>
    </head>
    <body>
        <h1>Namen</h1>
        <ul>
            <li><?php print($cursist->getVollNaam() . " volgt " . $cursist->getAantalCursussen() . " cursus(sen)"); ?></li>
            <li><?php print($medewerker->getVollNaam() . " begeleidt " . $medewerker->getAantalCursisten() . " cursist(en)"); ?></li>
        </ul>
    </body>
</html>

<?php
//rekeningnummers.php

require_once('Zichtrekening.php');
require_once('Spaarrekening.php');
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Rekeningnummers</title>
    </head>
    <body>
        <h1>
            <?php
            $rek = new Zichtrekening("091-0122401-16");
            print($rek->getOmschrijving());
            ?>
        </h1>
    </body>
</html>

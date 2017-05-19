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
            $zrek = new Zichtrekening("091-0122401-16");
            print("Het saldo is: " . $zrek->getSaldo() . "<br />");
            $zrek->stort(200);
            print("Het saldo is: " . $zrek->getSaldo() . "<br />");
            $zrek->voerIntrestDoor();
            print("Het saldo is: " . $zrek->getSaldo() . "<br />");
            ?>
        </h1>
    </body>
</html>

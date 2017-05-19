<?php
//rekeningnummers.php

require_once('Rekening.php');
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
            $rek = new Rekening("091-0122401-16");
            print("Het saldo is: " . $rek->getSaldo() . "<br />");
            $rek->stort(200);
            print("Het saldo is: " . $rek->getSaldo() . "<br />");
            $rek->voerIntrestDoor();
            print("Het saldo is: " . $rek->getSaldo() . "<br />");
            ?>
        </h1>
    </body>
</html>

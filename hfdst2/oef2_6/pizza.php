<?php
//pizza.php

$aantal = 2;    //expressie
$gratisThuisbezorging = false;    //expressie
$prijs = 6.5;    //expressie

if ($aantal * $prijs > 10.0) {    //expressie
    $gratisThuisbezorging = true;    //expressie
}
if ($gratisThuisbezorging) {    //expressie
    print("Uw pizza wordt gratis bezorgd.");
} else {
    print("Thuislevering kost 1 euro.");
}

/*De bedoeling van dit programma : pizza's worden gratis thuis geleverd als het totale betaalde bedrag 10 € overschrijdt.*/
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Pizza</title>
    </head>
    <body>

    </body>
</html>

<?php
//random.php

session_start();

if (!isset($_SESSION["aantal"])) {
    $_SESSION["aantal"] = 0;
    print($_SESSION["aantal"]);
} else {
    $_SESSION["aantal"]=$_SESSION["aantal"]+1;
    print($_SESSION["aantal"]);
}
if (!isset($_SESSION["getal"]) || $_SESSION["aantal"] == 10) {
    $_SESSION["aantal"] = 0;
    $_SESSION["getal"] = rand(1, 100);
}
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Random</title>
    </head>
    <body>
        <?php
        print($_SESSION["getal"]);
        
        
        ?>
    </body>
</html>

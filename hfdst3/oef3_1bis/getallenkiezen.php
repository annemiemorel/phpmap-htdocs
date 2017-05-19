<?php

//getallenkiezen.php

class Getal {

    public function getSom($getal1, $getal2) {
        $som = $getal1 + $getal2;
        return $som;
    }

}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Gebruikersinvoer</title>
    </head>
    <body>
        <h1>
            <?php
            $getal = new Getal();
            $resultaat = $getal->getSom($_GET["getal1"], $_GET["getal2"]);
            print($resultaat);
            ?>
        </h1>

    </body>
</html>

<?php

//getallenkiezen.php

class Getal {

    public function getSom($getal1, $getal2) {
        $som = $getal1 + $getal2;
        return $som;
    }

    public function getVerschil($getal1, $getal2) {
        $verschil = $getal1 - $getal2;
        return $verschil;
    }

    public function getProduct($getal1, $getal2) {
        $product = $getal1 * $getal2;
        return $product;
    }

    public function getQuotient($getal1, $getal2) {
        $quotient = $getal1 / $getal2;
        return $quotient;
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

            if ($_GET["bewerking"] == 1) {
                $resultaat = $getal->getSom($_GET["getal1"], $_GET["getal2"]);
            } elseif ($_GET["bewerking"] == 2) {
                $resultaat = $getal->getVerschil($_GET["getal1"], $_GET["getal2"]);
            } elseif ($_GET["bewerking"] == 3) {
                $resultaat = $getal->getProduct($_GET["getal1"], $_GET["getal2"]);
            } elseif ($_GET["bewerking"] == 4) {
                $resultaat = $getal->getQuotient($_GET["getal1"], $_GET["getal2"]);
            }
            
            print($resultaat);
            ?>
        </h1>

    </body>
</html>

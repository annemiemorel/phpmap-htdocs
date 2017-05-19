<?php

//getallenkiezen.php

class Getal {

    public function getSom($getal1, $getal2, $bewerking) {
        switch ($bewerking) {
    case '+':
        return $getal1+$getal2;
        break;
    case '-':
        return $getal1-$getal2;
        break;
    case '*':
        return $getal1*$getal2;
        break;
    case '/':
        return $getal1/$getal2;
        break;
    
    default:
        return "Foute bewerking ingegeven";
        break;
        
}}}
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
            $resultaat = $getal->getSom($_GET["getal1"], $_GET["getal2"], $_GET["bewerking"]);
            print($resultaat);
            ?>
        </h1>

    </body>
</html>
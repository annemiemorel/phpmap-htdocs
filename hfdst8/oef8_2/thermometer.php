<?php

//thermomether.php

class Thermometer {

    private $temperatuur;
    
    function __construct() {
        $this->temperatuur = 25;
    }

    public function verhoog($aantalGraden) {
        $this->temperatuur += $aantalGraden;
    }

    public function verlaag($aantalGraden) {
        $this->temperatuur -= $aantalGraden;
    }

    public function getTemperatuur() {
        return $this->temperatuur;
    }

}
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Thermometer</title>
    </head>
    <body>
        <h1>
            <?php
            $therm = new Thermometer();
            print($therm->getTemperatuur() . "<br />");
            $therm->verhoog(20);
            print($therm->getTemperatuur() . "<br />");
            $therm->verlaag(5);
            print($therm->getTemperatuur() . "<br />");
            ?>
        </h1>
    </body>
</html>

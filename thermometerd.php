<?php

//thermomether.php

class Thermometer {

    private $temperatuur;
    public function __construct($temperatuur){
        $this->temperatuur = $temperatuur;
    }
    public function verhoog($aantalGraden) {
        if(($aantalGraden + $this->temperatuur)<=100){ 
        $this->temperatuur += $aantalGraden;}
        else{
            echo "De temperatuur wordt hoger dan 100 graden. Kies een andere temperatuursverhoging";
            print("<br>");
        }       
    }

    public function verlaag($aantalGraden) {
        if(($this->temperatuur - $aantalGraden )>=-50){ 
        $this->temperatuur += $aantalGraden;}
        else{
            echo "De temperatuur wordt lager dan -50 graden. Kies een andere temperatuursverlaging";
            print("<br>");
        }     
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
            $therm = new Thermometer(22);
            $therm->verhoog(80);
            print($therm->getTemperatuur() . "<br />");
            $therm->verlaag(5);
            print($therm->getTemperatuur() . "<br />");
            ?>
        </h1>
    </body>
</html>

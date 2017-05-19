<?php

//modulesOpzoeken.php 
class ModuleLijst { 
    public function getLijst() { 
        $minprijs=$_GET["minprijs"];
        $maxprijs=$_GET["maxprijs"];
        //echo $minprijs . "***" . $maxprijs;
        $dbh = new PDO("mysql:host=localhost;dbname=cursusphp;charset=utf8;port=3307", 
        "root", ""); 
        $resultSet = $dbh->query("select naam, prijs from modules"); 
        $lijst = array(); 
        foreach ($resultSet as $rij) { 
            if($rij["prijs"]>=$minprijs && $rij["prijs"]<=$maxprijs){
            $naam = $rij["naam"] . ", " . $rij["prijs"]; 
            array_push($lijst, $naam); }
        } 
        sort($lijst);
        //print_r($lijst);
        $dbh = null; 
        return $lijst; 
    } 
} 
?>

<?php

//modulesOpzoeken.php 
class FilmLijst { 
    public function getLijst() { 
        
        $dbh = new PDO("mysql:host=localhost;dbname=cursusphp;charset=utf8;port=3307", 
        "root", ""); 
        $resultSet = $dbh->query("select titel, duurtijd from films"); 
        $lijst = array(); 
        foreach ($resultSet as $rij) { 
            
            $naam = $rij["titel"] . " (" . $rij["duurtijd"] ." min)"; 
            array_push($lijst, $naam); 
        } 
        sort($lijst);
        //print_r($lijst);
        $dbh = null; 
        return $lijst; 
    } 
} 
?>

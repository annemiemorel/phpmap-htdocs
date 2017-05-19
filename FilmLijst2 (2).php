<?php
require_once 'Film.php';
//modulesOpzoeken.php 
class FilmLijst { 
    public function getLijst() { 
        $sql = "select id, titel, duurtijd from films order by titel";
        $dbh = new PDO("mysql:host=localhost;dbname=cursusphp;charset=utf8","cursusgebruiker", "cursuspwd");
        $stmt = $dbh->prepare($sql);
        //print_r($stmt);
        $stmt->execute();
        $resultSet = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //print_r($resultSet);
        $lijst = array();
        foreach ($resultSet as $rij) {
            $film = new Film($rij["id"], $rij["titel"], $rij["duurtijd"]);
            array_push($lijst, $film);
        }
        //print_r($lijst);
        $dbh = null;
        return $lijst;
    } 
} 
?>

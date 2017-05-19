<?php

//FilmLijst.php
require_once 'Film.php';

class FilmLijst {

    public function getLijst() {
        $sql = "select id, titel, duurtijd from films order by titel";
        $dbh = new PDO("mysql:host=localhost;dbname=cursusphp;charset=utf8;port=3307", "root", ""); 

        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $resultSet = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        $lijst = array();
        foreach ($resultSet as $rij) {
            $film = new Film($rij["id"], $rij["titel"], $rij["duurtijd"]);
            array_push($lijst, $film);
        }
        $dbh = null;
        return $lijst;
    }

    public function createFilm($titel, $duurtijd) {
        if (is_numeric($duurtijd) && $duurtijd > 0 && !empty($titel)) {
            $sql = "insert into films (titel, duurtijd) values (:titel, :duurtijd)";
            $dbh = new PDO("mysql:host=localhost;dbname=cursusphp;charset=utf8;port=3307", "root", ""); 

            $stmt = $dbh->prepare($sql);
            $stmt->execute(array(
                ':titel' => $titel,
                ':duurtijd' => $duurtijd));
            $dbh = null;
        }
    }

    public function deleteFilm($id) {
        $sql = "delete from films where id = :id";
        $dbh = new PDO("mysql:host=localhost;dbname=cursusphp;charset=utf8;port=3307", "root", ""); 

        $stmt = $dbh->prepare($sql);
        $stmt->execute(array(
            ':id' => $id));
        $dbh = null;
    }

}

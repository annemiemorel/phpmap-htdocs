<?php

//BerichtenLijst.php
require_once("Bericht.php");

class BerichtenLijst {

    private $dbConn;
    private $dbUsername;
    private $dbPassword;

    public function __construct() {
        $this->dbConn = "mysql:host=localhost;dbname=cursusphp;charset=utf8";
        $this->dbUsername = "cursusgebruiker";
        $this->dbPassword = "cursuspwd";
    }

    public function getAlleBerichten() {
        $sql = "select id, nickname, boodschap from chatberichten order by datum desc";
//        $sql = "select id, nickname, boodschap from chatberichten order by datum desc limit 20"; //EXTRA
        $dbh = new PDO($this->dbConn, $this->dbUsername, $this->dbPassword);
        $resultSet = $dbh->query($sql);

        $lijst = array();
        if ($resultSet) { //indien de tabel nog leeg is, zou je anders een foutmelding krijgen !
            foreach ($resultSet as $rij) {
                $bericht = new Bericht($rij["id"], $rij["nickname"], $rij["boodschap"]);
                array_push($lijst, $bericht);
            }
        }

        $dbh = null;
        return $lijst;
    }

    public function createBericht($nickname, $boodschap) { 
        if (!empty($boodschap)) {
            
            /* Ofwel wordt de datum meegegeven in de sql-query, 
             * ofwel maak je een kolom 'datum' (type timestamp) aan in de tabel chatberichten en zet je de default op 'current_timestamp' */
            
//            $sql = "insert into chatberichten (nickname, boodschap, datum) values (:nickname, :boodschap, :datum)";
            $sql = "insert into chatberichten (nickname, boodschap) values (:nickname, :boodschap)";
            $dbh = new PDO($this->dbConn, $this->dbUsername, $this->dbPassword);
            $stmt = $dbh->prepare($sql);
//            $datum = date("Y-m-d H:i:s");
            $stmt->execute(array(
                ':nickname' => $nickname,
                ':boodschap' => $boodschap //,
//              ':datum' => $datum
                    ));
            $dbh = null;
        }
    }

}

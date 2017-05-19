<?php
//data/UserDAO.php
require_once ("data/DBConfig.php");
require_once("entities/User.php");

class UserDAO {

 public function getPaswoord() {  
     $sql = "select wachtwoord from gebruikers where gebruikersnaam= :gebruikersnaam";
    $dbh = new PDO(DBConfig::$DB_CONNSTRING,   DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD); 
    $resultSet = $dbh->query($sql);
    $lijst = array();
    foreach ($resultSet as $rij) {
        $gebruiker = new User($rij["gebruikersnaam"], $rij["wachtwoord"]);  
        array_push($lijst, $gebruiker);
    }
    $dbh = null;
    return $lijst;
}
}
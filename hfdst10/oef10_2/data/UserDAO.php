<?php

//data.UserDAO.php

require_once("entities/User.php");

class UserDAO {

    public static function getByGebruikersnaam($gebruikersnaam) {
        $sql = "select id, gebruikersnaam, wachtwoord from gebruikers where gebruikersnaam = :naam";
        $dbh = new PDO("mysql:host=localhost;dbname=cursusphp;charset=utf8;port=3307", "cursusgebruiker", "cursuspwd");
        $stmt = $dbh->prepare($sql);
        $stmt->execute(array(
            ':naam' => $gebruikersnaam));
        $rij = $stmt->fetch(PDO::FETCH_ASSOC);

        $user = null;
        if ($rij) { 
            $user = User::create($rij["id"], $rij["gebruikersnaam"], $rij["wachtwoord"]);
            $dbh = null;
        } 
        return $user;
    }

}

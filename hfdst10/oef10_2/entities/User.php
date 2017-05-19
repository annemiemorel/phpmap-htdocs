<?php

//entities/User.php

class User {

    private static $idMap = array();
    
    private $id;
    private $gebruikersnaam;
    private $wachtwoord;

    public function __construct($id, $gebruikersnaam, $wachtwoord) {
        $this->id = $id;
        $this->gebruikersnaam = $gebruikersnaam;
        $this->wachtwoord = $wachtwoord;
    }

    public static function create($id, $gebruikersnaam, $wachtwoord) {
        if (!isset(self::$idMap[$id])) {
            self::$idMap[$id] = new User($id, $gebruikersnaam, $wachtwoord);
        }
        return self::$idMap[$id];
    }

    function getId() {
        return $this->id;
    }

    function getGebruikersnaam() {
        return $this->gebruikersnaam;
    }

    function getWachtwoord() {
        return $this->wachtwoord;
    }

    function setGebruikersnaam($gebruikersnaam) {
        $this->gebruikersnaam = $gebruikersnaam;
    }

    function setWachtwoord($wachtwoord) {
        $this->wachtwoord = $wachtwoord;
    }

}

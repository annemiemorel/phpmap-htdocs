<?php

//business/UserService.php

require_once("data/UserDAO.php");

class UserService {

    public static function controleerGebruiker($gebruikersnaam, $wachtwoord) { 
        $user = UserDAO::getByGebruikersnaam($gebruikersnaam);
        //print_r($user);
        if (isset($user) && $user->getWachtwoord() == $wachtwoord) {
            return true;
        
        } else {
            return false;
        }
    }

}

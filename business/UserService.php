<?php

//business/UserService.php

class UserService {

//    public static function controleerGebruiker($gebruikersnaam, $wachtwoord) {
//        if ($gebruikersnaam == "admin" && $wachtwoord == "geheim"){
//            return true;
//        }
//        else {
//            return false;
//        }
//    }
//
//}
public function getGebruikerOverzicht() {
  $pDAO = new UserDAO();
  $paswoord = $pDAO->getPaswoord();
  return $paswoord;
 }
}
//require_once("business/UserService.php");
//
////$gService = new GeheimService.php");
//$gService = new UserService();
//$gebruikers=$gService->getGebruikersOverzicht();
//include("presentation/gebruikerslijst.php");


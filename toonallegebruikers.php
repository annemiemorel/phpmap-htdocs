<?php


//require_once("business/GeheimService.php");
require_once("business/UserService.php");

//$gService = new GeheimService.php");
$gService = new UserService();
//$gebruikers=$gService->getGebruikersOverzicht();
$gebruikers=$gService->controleerGebruiker("annemie", "anmo");
include("presentation/gebruikerslijst.php");
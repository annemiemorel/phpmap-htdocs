<?php
//toonalleboeken.php
require_once("business/BoekService.php");

$bService = new BoekService();
$boekenLijst = $bService->getBoekenOverzicht();
include("presentation/boekenlijst.php");
?>
<br>
<a href="voegboektoe.php"> Voeg boek toe </a>
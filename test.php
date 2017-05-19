<?php
//test.php
//
////***datalaag***
//require_once("data/BoekDAO.php"); //test BoekDAO => datalaag
//
//$dao = new BoekDAO();
//$lijst = $dao->getAll(); 
//***datalaag***
//***businesslaag***
//require_once("business/BoekService.php"); //test BoekService => businesslaag
//
//$boekSvc = new BoekService();
//$lijst = $boekSvc->getBoekenOverzicht();

//***businesslaag***
//***1 entiteit selecteren***

//***BoekDAO
//require_once("data/BoekDAO.php"); 
// 
//$dao = new BoekDAO();
//$lijst = $dao->getById(2);
//***BoekDAO
//***GenreDAO
require_once("data/GenreDAO.php"); 
 
$dao = new GenreDAO();
$lijst = $dao->getById(5);
//***GenreDAO
//***1 entiteit selecteren

print("<pre>");
print_r($lijst);
print("</pre>");  

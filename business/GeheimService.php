<?php
//business/PersoonService.php
require_once("data/GeheimDAO.php");

class GeheimService {

 public function getGebruikersOverzicht() {
  $gDAO = new GeheimDAO();
  $gebruikers = $gDAO->getAll();
  return $gebruikers;
 }

}

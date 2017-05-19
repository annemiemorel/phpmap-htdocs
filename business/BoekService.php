<?php
//business/BoekService.php
require_once("data/BoekDAO.php");

class BoekService {

 public function getBoekenOverzicht() {
  $bDAO = new BoekDAO();
  $lijst = $bDAO->getAll();
  return $lijst;
 }
 public function voegNieuwBoekToe($titel, $genreId) { //functie nodig om boek toe te voegen
    $boekDAO = new BoekDAO();
    $boekDAO->create($titel, $genreId);
} 
public function verwijderBoek($id) {  //functie om boek te verwijderen
 $boekDAO = new BoekDAO();
 $boekDAO->delete($id);
}  
public function haalBoekOp($id) {  //functie om boekgegevens aan te passen
 $boekDAO = new BoekDAO();
 $boek = $boekDAO->getById($id);
 return $boek;
}

public function updateBoek($id, $titel, $genreId) {//functie om boekgegevens aan te passen
 $genreDAO = new GenreDAO();
 $boekDAO = new BoekDAO();
 $genre = $genreDAO->getById($genreId);
 $boek = $boekDAO->getById($id);
 $boek->setTitel($titel);
 $boek->setGenre($genre);
 $boekDAO->update($boek);
} 
}

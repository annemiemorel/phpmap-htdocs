<?php
//entities/Boek.php 

class Boek {

 private static $idMap = array();  //bevat alle reeds aangemaakte objecten van klasse Genre; static: slechts 1 lijst voor alle Genre-objecten   
 private $id;
 private $titel;
 private $genre;

 private function __construct($id, $titel, $genre) {
 $this->id = $id;
 $this->titel = $titel;
 $this->genre = $genre;
}

 public static function create($id, $titel, $genre){
     if (!isset(self::$idMap[$id])) {  //geindexeerd met id van Boek-object: snel controleren of Boek-object met bepaalde id werd aangemaakt zonder hele array te overlopen
   self::$idMap[$id] = new Boek($id, $titel, $genre);  //indien er nog geen Boek-object met dit id bestaat, dan nieuw Boek-object aanmaken via constructor en aan lijst toevoegen
  } 
  return self::$idMap[$id];  //indien er wel Boek-object met dit id bestaat, dan wordt het bestaande object teruggegeven
 }
 
 public function getId() {
  return $this->id;
 }
 
 public function getTitel() {
  return $this->titel;
 }
 
 public function getGenre(){
     return $this->genre;
 }
 
// public function setId($id) {  //niet aanmaken, autoincrement!
//  $this->id = $id;
// }
 
 public function setTitel($titel) {
  $this->titel = $titel;
 }
 
 public function setGenre($genre){
     $this->genre=$genre;
 }
}


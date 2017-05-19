<?php
//entities/Genre.php

class Genre {

 private static $idMap = array();  //bevat alle reeds aangemaakte objecten van klasse Genre; static: slechts 1 lijst voor alle Genre-objecten
 
 private $id;
 private $genreNaam;
 
 private function __construct($id, $genreNaam) {  //private: van buitenaf geen objecten van klas Genre aanmaken, alleen mogelijk vanuit klasse Genre zelf
  $this->id = $id;
  $this->genreNaam = $genreNaam;
 }
 
 public static function create($id, $genreNaam) {  //nieuw object aanmaken (ipv via constructor!)
  if (!isset(self::$idMap[$id])) {  //geindexeerd met id van Genre-object: snel controleren of Genre-object met bepaalde id werd aangemaakt zonder hele array te overlopen
   self::$idMap[$id] = new Genre($id, $genreNaam);  //indien er nog geen Genre-object met dit id bestaat, dan nieuw Genre-object aanmaken via constructor en aan lijst toevoegen
  } 
  return self::$idMap[$id];  //indien er wel Genre-object met dit id bestaat, dan wordt het bestaande object teruggegeven
 }
 
 public function getId() {
  return $this->id;
 }
 public function getGenreNaam () {
  return $this->genreNaam;
 }
 
 public function setGenreNaam ($genreNaam) {
  $this->genreNaam = $genreNaam;
 }
 
}



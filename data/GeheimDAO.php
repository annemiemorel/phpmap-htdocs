<?php
//data/GeheimDAO.php
require_once("entities/Geheim.php");

class GeheimDAO {

 public function getAll() {  
    $lijst = array();
    array_push($lijst, new Geheim("admin","geheim"));
    return $lijst;
}
}
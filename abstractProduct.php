<?php 
//abstractProduct.php 
abstract class Product { 
    private $omschrijving; 
    private $prijs; 
    public function setOmschrijving($omschrijving) { 
    $this->omschrijving = $omschrijving; 
    } 
    public function setPrijs($prijs) { 
        $this->prijs = $prijs; 
    } 
    public function getOmschrijving() { 
        return $this->omschrijving; 
    } 
    public function getPrijs() { 
        return $this->prijs; 
    } 
} 
class Dvd extends Product { 
    private $speelduur; 
    private $genre; 
    public function setSpeelduur($speelduur) { 
        $this->speelduur = $speelduur; 
    } 
    public function setGenre($genre) { 
        $this->genre = $genre; 
    } 
    public function getSpeelduur() { 
        return $this->speelduur; 
    } 
    public function getGenre() { 
        return $this->genre; 
    } 
} 
class Boek extends Product { 
    private $uitgever; 
    private $auteur; 
    public function setUitgever($uitgever) { 
        $this->uitgever = $uitgever; 
    } 
    public function setAuteur($auteur) { 
        $this->auteur = $auteur; 
    } 
    public function getUitgever() { 
        return $this->uitgever; 
    } 
    public function getAuteur() { 
        return $this->auteur; 
    } 
} 
?> 
<!DOCTYPE HTML> 
<html> 
    <head> 
        <meta charset=utf-8> 
        <title>Boeken</title> 
    </head> 
    <body> 
        <h1> 
        <?php 
        $b = new Boek(); 
        $b->setPrijs(25.0); 
        print($b->getPrijs()); 
        ?> 
        </h1> 
    </body> 
</html>



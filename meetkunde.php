<?php 
//meetkunde.php 
class MeetkundeKlas { 
    private static $pi = 3.14; 
    private $aantal = 2;    
    
    public static function getOppervlakteCirkel($straal) { 
        return ($straal * $straal * self::$pi); 
    }
    public function getAantal(){ 
        return $this->aantal; 
    } 
} 
?><!DOCTYPE HTML> 
<html> 
    <head> 
        <meta charset=utf-8> 
        <title>Oppervlakte cirkel</title> 
    </head> 
    <body> 
        <h1> 
        <?php 
        $meet1 = new MeetkundeKlas(); 
        $meet2 = new MeetkundeKlas(); 
        print($meet1->getAantal(). '<br />'); 
        print(MeetkundeKlas::getOppervlakteCirkel(4.5)); 
        ?> 
        </h1> 
    </body> 
</html>



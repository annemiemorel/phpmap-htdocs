<?php 
//cookies.php 
if (!empty($_POST["txtNaam"])) { 
setcookie("ingevuldeNaam", $_POST["txtNaam"], time() + 120); 
$naam = $_POST["txtNaam"]; 
} else { 
$naam=""; 
if (isset($_COOKIE["ingevuldeNaam"])) { 
$naam = $_COOKIE["ingevuldeNaam"]; 
} 
} 
?> 
<?php

class GetalArrayGenerator {

    public function getArray() {
        $tab = array();   
                  
        
           // $grondtal=7;
            $arrGen = new GetalArrayGenerator();
            $keuze=$arrGen->getArray($grondtal);
            
        
        return $tab;
    }
    public function getSchat(){
        $schatnr=rand(1,7); 
        
    }

}
?>

<!DOCTYPE HTML> 
<html> 
    <head> 
        <meta charset=utf-8> 
        <title>Schat</title> 
    </head> 
    <body> 
        <h1>Kies een deur</h1>
        <?php $schat=4; $open_toe=array(1,0,0,2,0,1,0); //met vaste instelling
        //print_r($open_toe);
        for($i=1;$i<=7;$i++){
            //echo "open_toe " . $i . " = " . $open_toe[$i-1];
            //print $i-1 . " geeft " . $open_toe[$i-1];
            switch ($open_toe[$i-1]) {
                case 0:
                       ?>
                    <img src="images/doorclosed.png">
                    <?php
                    break;
                case 1:
                    ?>
                    <img src="images/dooropen.png">
                    <?php
                    break;
                case 2:
                      ?>
                    <img src="images/doortreasure.png">
                    <?php
                    break;
        }} ?>
        <br> 
        Klik <a href=""> hier </a> om een nieuw spel te beginnen.
    </body> 
</html>


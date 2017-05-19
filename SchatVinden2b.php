<?php
session_start();
if (isset($_GET["kiesdeur"])) {
    //$_SESSION["aantalkeer"] +=1;     // EXTRA
    
    $gekozenDeurNr = $_GET["kiesdeur"];
    echo $gekozenDeurNr;
    echo $_SESSION["schatnr"];
    if ($gekozenDeurNr == $_SESSION["schatnr"]) {
        $_SESSION["schatArray"][$gekozenDeurNr] = 2;
        print_r($_SESSION["schatArray"]);
        //$msg= "Geraden in " . $_SESSION["aantalkeer"] . " beurt(en)!";     // EXTRA
        
    } else {
        $_SESSION["schatArray"][$gekozenDeurNr] = 1;
    }
}
//class GetalArrayGenerator {
//    public function getSchat(){
//            $schatnr=rand(1,7); 
            //echo $schatnr;
            if (!isset($_SESSION["schatnr"])) {
                $_SESSION["schatnr"] = $schatnr;
            }        
//            return $schatnr;
//
//        }
//    public function getArray() {
//        //$arrGen = new GetalArrayGenerator();
//        //$keuze=$arrGen->getArray($grondtal);
//        $tab = array();   
//        //$keuze=$arrGen->getSchat();
//        //echo $keuze;
//        for($i=1;$i<=7;$i++){
//            //if($i == $keuze){
//                array_push($tab,0);}
//            else{
//                array_push($tab,0);
//            }
//        }          
        if (!isset($_SESSION["schatArray"])) {
            for($i=1;$i<=7;$i++){
                  array_push($tab,0);}
                  $_SESSION["schatArray"] = $tab;
                  print_r($tab);
        }        
       
//        return $tab;
//    }
//    

//}
?>

<!DOCTYPE HTML> 
<html> 
    <head> 
        <meta charset=utf-8> 
        <title>Schat</title> 
    </head> 
    <body> 
        <h1>Kies een deur</h1>
        <?php 
//        $arrGen = new GetalArrayGenerator();
//        $open_toe=$arrGen->getArray();
//        $schat=$arrGen->getSchat();
        $open_toe=$_SESSION["schatArray"]; //met vaste instelling
//        print_r($open_toe);
        for($i=1;$i<=7;$i++){
            //echo "open_toe " . $i . " = " . $open_toe[$i-1];
            //print $i-1 . " geeft " . $open_toe[$i-1]; 
            ?>  <a href="SchatVinden2.php?kiesdeur=<?php print($i);?>"           
               <!--<a href="schatcontrole.php" >-->
                   <?php
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
               ?> </a> <?php
        }} ?>
        <br> 
        Klik <a href=""> hier </a> om een nieuw spel te beginnen.
    </body> 
</html>


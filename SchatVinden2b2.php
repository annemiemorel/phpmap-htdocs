<?php
session_start();

if (isset($_GET["kiesdeur"])) {
    //$_SESSION["aantalkeer"] +=1;     // EXTRA
    
    $gekozenDeurNr = $_GET["kiesdeur"];
    //echo $gekozenDeurNr;
    //echo $_SESSION["schatnr"];
    if ($gekozenDeurNr == $_SESSION["schatnr"]) {
        $_SESSION["schatArray"][$gekozenDeurNr] = 2;
       // print_r($_SESSION["schatArray"]);
        //$msg= "Geraden in " . $_SESSION["aantalkeer"] . " beurt(en)!";     // EXTRA
        $_SESSION["stoppen"]=1;
    } else {
        $_SESSION["schatArray"][$gekozenDeurNr] = 1;
    }
}
if (isset($_GET["opnieuw"]) && $_GET["opnieuw"]==1) {
    for($i=1;$i<=7;$i++){
    $_SESSION["schatArray"][$i] = 0;
    //print_r($_SESSION["schatArray"]);
    $schatnr=rand(1,7);
    $_SESSION["schatnr"] = $schatnr;
    unset($_GET["opnieuw"]);
    unset($_SESSION["schatnr"]);
    unset($_SESSION["schatArray"]);
    $_SESSION["stoppen"]=0;
    }
}
            
            //echo $schatnr;
if (!isset($_SESSION["schatnr"])) {
    $schatnr=rand(1,7);
    $_SESSION["schatnr"] = $schatnr;
    $_SESSION["stoppen"]=0;
}        

if (!isset($_SESSION["schatArray"])) { 
$tab = array();
for($i=1;$i<=7;$i++){
      array_push($tab,0);}
      $_SESSION["schatArray"] = $tab;
     // print_r($tab);
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
        <?php 
//        $arrGen = new GetalArrayGenerator();
//        $open_toe=$arrGen->getArray();
//        $schat=$arrGen->getSchat();
        $open_toe=$_SESSION["schatArray"]; //met vaste instelling
//        print_r($open_toe);
        for($i=1;$i<=7;$i++){
            //echo "open_toe " . $i . " = " . $open_toe[$i-1];
            //print $i-1 . " geeft " . $open_toe[$i-1]; 
            if($_SESSION["stoppen"]==0){ 
            ?>  <a href="SchatVinden2b.php?kiesdeur=<?php print($i-1);?>"           
               <!--<a href="schatcontrole.php" >-->
            <?php }
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
               ?>  <?php
        }?> </a> <?php } ?>
        <br> <br>
        Klik <a href="SchatVinden2b.php?opnieuw=1" > hier </a> om een nieuw spel te beginnen.
    </body> 
</html>


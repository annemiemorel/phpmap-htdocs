<?php
session_start();

if (isset($_POST["lucifers"])) {
    //$_SESSION["aantalkeer"] +=1;     // EXTRA
    //echo $_POST["lucifers"];
    $kiesLucifers = $_POST["lucifers"];
    $_SESSION["lucifers"]=$_POST["lucifers"];
    //echo "kiesLucifers=" . $kiesLucifers;
    //echo $_SESSION["schatnr"];
    if ($kiesLucifers==1) {
        echo "kies 1 lucifer.   ";
        $_SESSION["aantalLucifers"] --;
        print("overige lucifers =  " .$_SESSION["aantalLucifers"]);
        //$msg= "Geraden in " . $_SESSION["aantalkeer"] . " beurt(en)!";     // EXTRA
        if($_SESSION["aantalLucifers"]>0){
            $_SESSION["actief"]=1;
            //$_SESSION["aantalLucifers"]=7;
            echo "Lucifers zijn weg";
        }
    } elseif ($kiesLucifers==2) {
        for($i=1;$i<=2;$i++){
    
        echo "kies 2 lucifers.   ";
        $_SESSION["aantalLucifers"] --;
        print("overige lucifers =  " .$_SESSION["aantalLucifers"]);
       // print_r($_SESSION["luciferArray"]);
        //$msg= "Geraden in " . $_SESSION["aantalkeer"] . " beurt(en)!";     // EXTRA
        if($_SESSION["aantalLucifers"]>0){
            $_SESSION["actief"]=1;
            //$_SESSION["aantalLucifers"]=7;
            echo "Lucifers zijn weg";
        }
}}}
if (isset($_GET["opnieuw"]) && $_GET["opnieuw"]==1) {
    for($i=1;$i<=7;$i++){
    $_SESSION["luciferArray"][$i] = 0;}
    //print_r($_SESSION["luciferArray"]);
    //$schatnr=rand(1,7);
    //$_SESSION["schatnr"] = $schatnr;
    unset($_GET["opnieuw"]);
    unset($_SESSION["aantalLucifers"]);
    unset($_SESSION["luciferArray"]);
    unset($_POST["lucifers"]);
    $_SESSION["actief"]=0;
    }

            
            //echo $schatnr;
if (!isset($_SESSION["aantalLucifers"])) {
    echo "zet aantal lucifers op 7";
    $_SESSION["aantalLucifers"] = 7;
    $_SESSION["actief"]=0;
    $_SESSION["lucifers"]=1;
}        

if (!isset($_SESSION["luciferArray"])) { 
$tab = array();
for($i=1;$i<=7;$i++){
      array_push($tab,0);}
      $_SESSION["luciferArray"] = $tab;
     // print_r($tab);
}        


?>

<!DOCTYPE HTML> 
<html> 
    <head> 
        <meta charset=utf-8> 
        <title>LuciferSpel</title> 
        <style>
            div{
                float:left;
            }
            .zetlinks{
                clear:left;
            }
        </style>
    </head> 
    <body> 
        <h1>LuciferSpel</h1>
        <?php 
//        $arrGen = new GetalArrayGenerator();
//        $open_toe=$arrGen->getArray();
//        $schat=$arrGen->getSchat();
        $lucifer=$_SESSION["luciferArray"]; //met vaste instelling
        $keuze=$_SESSION["lucifers"];
        //$aantalLucifers=7
        //print_r($lucifer);
        ?><div class="lucifers"> <?php
        echo "actief? " . $_SESSION["actief"] . "***";
        for($i=1;$i<=7;$i++){
            //echo "open_toe " . $i . " = " . $open_toe[$i-1];
            //print $i-1 . " geeft " . $open_toe[$i-1]; 
//            for($j=1;$j<=$keuze;$j++){
            
            if($_SESSION["actief"]==1){ 
            ?>  <a href="LuciferSpel.php?kieslucifer=<?php print($i-1);?>"           
               <br><div>
            <?php }
            switch ($lucifer[$i-1]) {
                case 0:
                    ?>
                    <img src="images/lucifer.png"></a>
               
                    <?php
                    break;
                case 1:
                    print "";
                    break;
                
               ?>  <?php
            }?></div> </div> <?php }$_SESSION["actief"]=0; ?>
        <br> <br>
        <div class="zetlinks">
        <form action="LuciferSpel.php" method="post"> 
        <input type="text" name="lucifers" value="1" style="visibility:hidden;" size="1"/> 
        <input type="submit" value="Een lucifer wegnemen" /> 
        </form></div>
        <div>
        <form action="LuciferSpel.php" method="post"> 
        <input type="text" name="lucifers" value="2" style="visibility:hidden" size="1" /> 
        <input type="submit" value="Twee lucifers wegnemen" /> 
        </form></div>
        <br><div class="zetlinks">
            Klik <a href="LuciferSpel.php?opnieuw=1" > hier </a> om een nieuw spel te beginnen.</div>
    </body> 
</html>


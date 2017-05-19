<?php
session_start();
require_once 'LichtLijst.php';
//$pl = new MuntLijst(); 
//$lijst = $pl->getMunt(); 
$lampenRij=4;
if(!isset($_SESSION["lichtuit"])){
    $_SESSION["lichtuit"]=0;
}

if (isset($_GET["actie"]) && $_GET["actie"] == "wissel") {
    $kolomnummer=$_GET["kol"];
    $rijnummer=$_GET["rij"]; 
    $pl = new LichtLijst(); 
    $_SESSION["lichtuit"]=0;
     for($i=$rijnummer-1;$i<=$rijnummer+1;$i++){
         if($i>=0 and $i<=$lampenRij){
        $lijst=$pl->getLicht($i, $kolomnummer);
        foreach ($lijst as $naam) { 
             $status=$naam->getStatus(); 
             //echo "status = ".$status;
             if($status==0){ 
                 $_SESSION["status"]=1;
             }else{
                 $_SESSION["status"]=0;
             }
        }
    }$pl->plaatsLicht($i, $kolomnummer, $_SESSION["status"]);
     }
    for($i=$kolomnummer-1;$i<=$kolomnummer+1;$i++){
         if($i>=0 and $i<=$lampenRij){
        $lijst=$pl->getLicht($rijnummer, $i);
        foreach ($lijst as $naam) { 
             $status=$naam->getStatus(); 
             //echo "status = ".$status;
             if($status==0){ 
                 $_SESSION["status"]=1;
             }else{
                 $_SESSION["status"]=0;
             }
        }
    }$pl->plaatsLicht($rijnummer, $i, $_SESSION["status"]);
    $i++; //overslaan geklikte positie, want reeds in vorige for-lus aangepast
     }
    $_SESSION["poging"] ++;
    //echo "poging = ". $_SESSION["poging"];
}

if (isset($_GET["actie"]) && $_GET["actie"] == "herstart") {
    $pl = new LichtLijst(); 
    echo "nieuw spel"; 
    for($rij=1;$rij<=$lampenRij;$rij++){ 
            for($kol=1;$kol<=$lampenRij;$kol++){
             $lijst = $pl->alleLicht($rij,$kol);
             }
    }
    $_SESSION["poging"]=0;
    $_SESSION["lichtuit"]=0;
}

?>
<!DOCTYPE HTML> 
<html> 
    <head> 
        <meta charset=utf-8> 
        <title>4 op een rij</title> 
        <style>
            td ,tr {
                margin:0;
                padding:0;
            }
            table{
                border-collapse: collapse;
                border-spacing: 0;
                border:0;
            }
        </style>
    </head> 
    <body> 
        <h1>Lights out!</h1>
      
        <?php 
        $pl = new LichtLijst(); 
//        for($rij=1;$rij<=6;$rij++){ 
//            for($kol=1;$kol<=7;$kol++){             
//            }
//        }     
        ?>
        <table>
             <?php for($rij=1;$rij<=$lampenRij;$rij++){ ?>
            <tr>
        <?php for($kol=1;$kol<=$lampenRij;$kol++){ 
             $lijst = $pl->getLicht($rij,$kol); 
       
        //print_r($tab); // $naam[titel];
            foreach ($lijst as $naam) { 
             $status=$naam->getStatus(); 
             if($status==1){
                 $image="images/lightsout-aan.png";
             }elseif($status==0){
                 $image="images/lightsout-uit.png";
                 $_SESSION["lichtuit"]++;
            }
                 
             }
             if($_SESSION["lichtuit"]==$lampenRij*$lampenRij){
                 ?> <h2 style="color:red"> Spel uitgespeeld in <?php print($_SESSION["poging"]);?> pogingen</h2>
                
             <?php }
            ?>
        <td>
        
        <a href="lightsOut.php?actie=wissel&kol=<?php print($kol) ?>&rij=<?php print($rij) ?>"><img src=<?php print($image); ?>> </a></td>
       <?php } ?>
            </tr>
             <?php } ?>
        </table>
       
        <br>
        <br>
        <a href="lightsOut.php?actie=herstart"> Nieuw spel </a>
        
    </body>
</html>
<?php
session_start();
require_once 'MuntLijst.php';
//$pl = new MuntLijst(); 
//$lijst = $pl->getMunt(); 
if (isset($_GET["kleur"]) && $_GET["kleur"] == "geel") {
    
    echo "Je koos geel";  
    $_SESSION["kleur"]="geel";
}
if (isset($_GET["kleur"]) && $_GET["kleur"] == "rood") {
    
    echo "Je koos rood"; 
    $_SESSION["kleur"]="rood";
}
if (isset($_GET["actie"]) && $_GET["actie"] == "vulin") {
    $kolomnummer=$_GET["kol"];
    $rijnummer=$_GET["rij"]; 
    $pl = new MuntLijst(); 
    if($_SESSION["kleur"]=="geel"){
         $kleur=1;
//        $pl->plaatsMunt($rijnummer, $kolomnummer, 1);
    }else{ $kleur=2;
    
    }    
     for($i=$rijnummer;$i<=7;$i++){
        $lijst=$pl->getMunt($i, $kolomnummer);
        foreach ($lijst as $naam) { 
             $status=$naam->getStatus(); 
             if($status==0){ 
                 $plaats=$i;
             }  
    }
     }
    $pl->plaatsMunt($plaats, $kolomnummer, $kleur);
}
if (isset($_GET["actie"]) && $_GET["actie"] == "vernieuw") {
    //echo "vernieuw";
    if($_SESSION["kleur"]=="geel"){
        $_SESSION["kleur"]="rood";
    }else{
        $_SESSION["kleur"]="geel";
    }
     echo "kleur is nu ". $_SESSION["kleur"];   
}
if (isset($_GET["actie"]) && $_GET["actie"] == "herstart") {
    $pl = new MuntLijst(); 
    echo "nieuw spel"; 
    for($rij=1;$rij<=6;$rij++){ 
            for($kol=1;$kol<=7;$kol++){
             $lijst = $pl->geenMunt($rij,$kol);
             }
    }
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
        <h1>Vier op een Rij</h1>
      
        <?php 
        $pl = new MuntLijst(); 
//        for($rij=1;$rij<=6;$rij++){ 
//            for($kol=1;$kol<=7;$kol++){             
//            }
//        }     
        ?>
        <table>
             <?php for($rij=1;$rij<=6;$rij++){ ?>
            <tr>
        <?php for($kol=1;$kol<=7;$kol++){ 
             $lijst = $pl->getMunt($rij,$kol); 
       
        //print_r($tab); // $naam[titel];
            foreach ($lijst as $naam) { 
             $status=$naam->getStatus(); 
             if($status==0){
                 $image="images/emptyslot.png";
             }elseif($status==1){
                 $image="images/yellowslot.png";
            }
                 else{
                     $image="images/redslot.png";
                 }
             }
            ?>
    <td>
        
        <a href="spelen.php?actie=vulin&kol=<?php print($kol) ?>&rij=<?php print($rij) ?>"><img src=<?php print($image); ?>> </a></td>
       <?php } ?>
            </tr>
             <?php } ?>
        </table>
        <a href="spelen.php?actie=vernieuw"> Vernieuw bord </a>
        <br>
        <br>
        <a href="spelen.php?actie=herstart"> Spel herstarten </a>
        
    </body>
</html>
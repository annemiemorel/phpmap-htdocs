<?php

//if (isset($_GET["kleur"]) && $_GET["kleur"] == "geel") {
//    
//    echo "Je koos geel";  
//    $_SESSION["kleur"]="geel";
//}
if (isset($_GET["actie"]) && $_GET["actie"] == "herstart") {
    
    echo "nieuw spel"; 
    $_SESSION["actie"]=$_GET["actie"];
}

?>
<!DOCTYPE HTML> 
<html> 
    <head> 
        <meta charset=utf-8> 
        <title>4 op een rij</title> 
    </head> 
    <body> 
        <h1>Vier op een Rij</h1>
        <h2>Kies de kleur waar je mee wilt spelen</h2>
         
        <ul>
            <li><a href="spelen.php?kleur=geel"> Klik hier om met geel te spelen</a></li>
            <li><a href="spelen.php?kleur=rood"> Klik hier om met rood te spelen</a></li>
        </ul>
    </body>
</html>
<?php 
//kleur.php 
$achtergrondkleur="white";
if (!empty($_POST["kleurNaam"])) { 
setcookie("achtergrondKleur", $_POST["kleurNaam"], time() + 120); 
$achtergrondkleur = $_POST["kleurNaam"]; 
//echo "kleur=".$naam;
} elseif (isset($_COOKIE["achtergrondKleur"])) { 
$achtergrondkleur = $_COOKIE["achtergrondKleur"]; 
} 
 
?> 

<!DOCTYPE HTML> 
<html> 
<head> 
<meta charset=utf-8> 
<title>Kleur</title> 
</head> 
<body <?php echo "STYLE='background-color:".$achtergrondkleur.";'";?>> 
   <?php if (!empty($achtergrondkleur)) { print("Uw favoriete achtergrondkleur is ") . $achtergrondkleur; } ?>  
    <br>
    Kies uw favoriete achtergrondkleur
  <form action="kleur2.php" method="post"> 
    <select name="kleurNaam">
        <option value="red" >Rood</option>
        <option value="blue" >Blauw</option>
        <option value="green" >Groen</option>
        <option value="yellow" >Geel</option>
        <option value="white" >Wit</option>
    </select>
    <input type="submit" value="OK"  /> 
  </form> 
<br > 
<a href="kleur2.php">Pagina vernieuwen</a> 
</body> 
</html>

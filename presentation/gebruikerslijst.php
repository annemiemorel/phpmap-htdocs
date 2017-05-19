<!DOCTYPE HTML>
<!--presentation/gebruikerslijst.php-->
<html>
 <head>
  <meta charset=utf-8>
  <title>Gebruikers</title>
 </head>
 <body>
  <h1>Gebruikerslijst</h1>
  <ul>
   <?php
   foreach ($gebruikers as $persoon) {
    ?>
    <li> 
     <?php print($persoon->getGebruikersnaam() . 
     ", " . $persoon->getPaswoord());?>
    </li>
    <?php
   }
   ?>
  </ul>
 </body>
</html>


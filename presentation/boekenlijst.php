<!DOCTYPE HTML>
<!-- presentation/boekenlijst.php -->
<html>
 <head>
  <meta charset=utf-8>
  <title>Boeken</title>
  <style>
   table { border-collapse: collapse; }
   td, th { border: 1px solid black; padding: 3px; }
   th { background-color: #ddd; }
  </style>
 </head>
 <body>
  <h1>Boekenlijst</h1>

  <table>
   <tr>
    <th>Titel</th>
    <th>Genre</th>
   </tr>
   <?php
  
   foreach ($boekenLijst as $boek) {  //variabele $boekenlijst wordt aangemaakt in toonalleboeken.php !!!
    ?>
    <tr>
     <td>
      <a href="updateboek.php?id=<?php print($boek->getId());?>">  <!--ook hier hyperlink toevoegen om boekgegevens aan te passen-->
        <?php print($boek->getTitel());?>
      </a>
     </td>
     <td> 
      <?php print($boek->getGenre()->getGenreNaam());?>
     </td>
     <!-- hyperlink toevoegen om boek te verwijderen-->
     <td> 
        <a href="verwijderboek.php?id=<?php print($boek->getId());?>"> Verwijder</a>
    </td>

    </tr>
    <?php
   }
   ?>
  </table>
 </body>
</html>  

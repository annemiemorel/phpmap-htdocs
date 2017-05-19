<?php
//kalender.php

class Kalender {
 public function getAantalDagenInMaand() {
  $dagen = array();
  $dagen["januari"] = 31;
  $dagen["februari"] = 28;
  $dagen["maart"] = 31;
  $dagen["april"] = 30;
  $dagen["mei"] = 31;
  $dagen["juni"] = 30;
  $dagen["juli"] = 31;
  $dagen["augustus"] = 31;
  $dagen["september"] = 30;
  $dagen["oktober"] = 31;
  $dagen["november"] = 30;
  $dagen["december"] = 31;
  return $dagen;
 }
}
?>


<!DOCTYPE HTML>
<html>
 <head>
  <meta charset=utf-8>
  <title>Kalender</title>
 </head>
 <body>
  <ul>
   <?php
   $kal = new Kalender();
   $tabel = $kal->getAantalDagenInMaand();
   foreach ($tabel as $sleutel=>$waarde) {
    print("<li>");
    print($sleutel);
    print(" bevat ");
    print($waarde);
    print(" dagen");
    print("</li>");
   }
   ?>
  </ul>
 </body>
</html> 
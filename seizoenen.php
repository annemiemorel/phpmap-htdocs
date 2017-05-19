<?php
//seizoenen.php
 
class SeizoenenArrayGenerator { 
 public function getSeizoen() {
  $seizoenen = array();
  array_push($seizoenen, "lente");
  array_push($seizoenen, "zomer");
  array_push($seizoenen, "herst"); 
  array_push($seizoenen, "winter");
  
  return $seizoenen; 
 }
}
?>


<!DOCTYPE HTML>
<html>
 <head>
  <meta charset=utf-8>
  <title>seizoenen</title>
 </head>
 <body>
  <pre>
   <?php
   $seizoenen= new SeizoenenArrayGenerator();
   print_r($seizoenen->getSeizoen());
   ?>
  </pre>
 </body>
</html> 
<?php
//tachtig.php
 
class RandomArrayGenerator { 
 public function getGetal() {
  $getallen = array();
  $getal=rand(1,100);
   $getallen[]=$getal;
  while($getal<=80){
    $getal=rand(1,100);
    $getallen[]=$getal;
  }
  
  return $getallen; 
 }
}
?>


<!DOCTYPE HTML>
<html>
 <head>
  <meta charset=utf-8>
  <title>tachtig</title>
 </head>
 <body>
  <pre>
   <?php
   $getallen= new RandomArrayGenerator();
   print_r($getallen->getGetal());
   ?>
  </pre>
 </body>
</html> 
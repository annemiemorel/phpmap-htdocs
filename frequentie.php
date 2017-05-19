<?php
//frequentie.php
 
class RandomArrayGenerator { 
 public function getGetal() {
  $getallen = array();
for($i=1;$i<=40;$i++){
  $getallen[$i]=0;
}
for($i=1;$i<=100;$i++){
  $getal=rand(1,40);
   $getallen[$getal]++;
  
  }
  for($i=1;$i<=40;$i++){
 echo "Getal " . $i . " werd " . $getallen[$i]. " keer gegenereerd. <br>";
}
  return ; 
 }
}
?>


<!DOCTYPE HTML>
<html>
 <head>
  <meta charset=utf-8>
  <title>frequentie</title>
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
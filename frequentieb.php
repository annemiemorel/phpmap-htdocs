<?php
//frequentie.php
 
class Frequentie { 
 public function getGetal() {
  $getallen = array();
for($i=1;$i<=40;$i++){
  $getallen[$i]=0;
}
for($i=1;$i<=100;$i++){
  $getal=rand(1,40);
   $getallen[$getal]++;
  
  }
 
  return $getallen; 
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
   $freq = new Frequentie();
   $getallen = $freq->getGetal();
   
     for($i=1;$i<=40;$i++){?>

  Getal <?php print($i); ?> werd <?php print($getallen[$i]); ?> keer gegenereerd.<br>
<?php
}
?>
  </pre>
 </body>
</html> 
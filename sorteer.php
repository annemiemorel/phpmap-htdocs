<?php
//sorteer.php
 
class SorteerArrayGenerator { 
 public function getGetal() {
  $getallen = array();
  for($i=1;$i<=50;$i++){
    if($i%2==1){
        $getallen[($i-1)/2]=$i;
    }
    else{
        $getallen[($i/2)+24]=$i;
    }
  }
  return $getallen; 
 }
}
?>


<!DOCTYPE HTML>
<html>
 <head>
  <meta charset=utf-8>
  <title>sorteer</title>
 </head>
 <body>
  <pre>
   <?php
   $getallen= new SorteerArrayGenerator();
   print_r($getallen->getGetal());
   ?>
  </pre>
 </body>
</html> 
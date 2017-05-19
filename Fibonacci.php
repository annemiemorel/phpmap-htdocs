<?php //Fibonacci.php 
class Oefening { 
    public function getFibonacci() {
      
       
        return;
    }    
 }
 ?> 
<!DOCTYPE HTML> 
<html> 
    <head> 
        <meta charset=utf-8> 
        <title>Fibonacci</title> 
    </head> 
    <body> 
    <?php    
        $getal1=0;
      $getal2=1;
      $getal3=$getal1+$getal2;
      echo $getal1 . "-"; 
      echo $getal2 . "-";
      while($getal3<5000){
          echo $getal3 . "-";
          $getal1=$getal2;
          $getal2=$getal3;
          $getal3=$getal1+$getal2;
      }
        
      ?>  
    </body> 
</html>
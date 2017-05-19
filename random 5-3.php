<?php
//random-sessie.php
 session_start();
 $_SESSION["randomgetal"]=rand(1,100);
 $_SESSION["teller"]=0;
  if(!isset($_SESSION["randomgetal"])){
      echo "Variabele randomgetal bestaat niet";
      
  }
  else{
      echo "Variabele randomgetal bestaat al";
      $_SESSION["teller"]=$_SESSION["teller"]+1;
    
      if($_SESSION["teller"]>=10){
          $_SESSION["teller"]=0;
          unset($_SESSION["randomgetal"]);
      }
     } 
?>


<!DOCTYPE HTML>
<html>
 <head>
  <meta charset=utf-8>
  <title>Random</title>
 </head>
 <body>
  <pre>
   <?php
   echo "Randomgetal = " . $_SESSION["randomgetal"] ;?> <br><?php
    echo "Teller = " . $_SESSION["teller"];
         
        
   ?>
  </pre>
 </body>
</html> 
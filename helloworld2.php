<?php //helloworld.php 
class GreetingGenerator { 
    public function getGreeting() 
            { return "04/05/2017 - 20:38:00"; } 
          
    } 
 ?> 
<!DOCTYPE HTML> 
<html> 
    <head> 
        <meta charset=utf-8> 
        <title>Hello world</title> 
    </head> 
    <body> 
        <h1> <?php $gg = new GreetingGenerator(); print($gg->getGreeting()); ?> </h1> 
    </body> 
</html>

<?php 
//getallenarray.php 
class GetalArrayGenerator { 
    public function getArray() { 
        $vulArray=array();
        for($i=0;$i<20;$i++){
            $getal=rand(-50,50);
            $vulArray[$i]=$getal;
        }
        return $vulArray;
    } 
} 
?> 
<!DOCTYPE HTML> 
<html> 
    <head> 
        <meta charset=utf-8> 
        <title>Willekeurige getallen</title> 
    </head> 
    <body> 
        <pre> 
            <?php 
            $arrGen= new GetalArrayGenerator(); 
            print_r($arrGen->getArray()); 
            ?> 
        </pre> 
    </body> 
</html>

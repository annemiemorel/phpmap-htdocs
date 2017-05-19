<?php 
//getallenarray.php 
class GetalArrayGenerator { 
    public function getArray() { 
        $vulArray=array();
        $vulArray[0]=0;
        $vulArray[2]=1;
        for($i=2;$i<30;$i++){
            $vulArray[$i]=$vulArray[$i-1]+$vulArray[$i-2];
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

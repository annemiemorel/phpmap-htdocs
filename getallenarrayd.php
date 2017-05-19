<?php 
//getallenarray.php 
class GetalArrayGenerator { 
    public function getArray() { 
        $vulArray=array();
        $vulArray[0]=0;
       
        for($i=1;$i<50;$i++){
            $vulArray[$i]=$i+$vulArray[$i-1];
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

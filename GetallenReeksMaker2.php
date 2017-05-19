<?php 
//GetallenReeksMaker.php 

class GetallenReeksMaker2 { 
    public function getReeks() { 
        $getallen = array();
        for($i=1;$i<=10;$i++){
            $getal=rand(1,100);
            array_push($getallen,$getal);
            
        }
        sort($getallen);
    return $getallen; 
} 
}


<?php 
//GetallenReeksMaker.php 

class GetallenReeksMaker3 { 
    public function getReeks() { 
        $getallen = array();
        for($i=1;$i<=10;$i++){
            $getal=rand(1,100);
            array_push($getallen,$getal);
            
        }
        rsort($getallen);
    return $getallen; 
} 
}


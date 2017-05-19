<?php

class GetalArrayGenerator {

    public function getArray($grondtal) {
        $tab = array();
        $teller=0;
        while($teller<6){
         $getal=rand(1,$grondtal*$grondtal);
         if(!(in_array($getal,$tab))){
             array_push($tab, $getal);
             $teller++;
         }
            
        }
        
        
        return $tab;
    }

}
?>
<!DOCTYPE HTML> 
<html> 
    <head> 
        <meta charset=utf-8> 
        <title>Lotto</title> 
    </head> 
    <body> 
         <?php
            $grondtal=7;
            $arrGen = new GetalArrayGenerator();
            $keuze=$arrGen->getArray($grondtal);
            ?>
        <table border="1" > 
            <tbody >
                
                
                 <?php 
                 
                 for($i=1;$i<=$grondtal;$i++) { ?>
                <tr> 
                   
                    <?php for($j=1;$j<=$grondtal;$j++) { 
                        $getal=$j+$grondtal*($i-1);?>
                        <td><?php
                        if(in_array($getal,$keuze)){?>
                           <div style="background-color: #d1cfcf; padding:1em;"> 
                        <?php print(($getal));?> 
                            </div><?php }   else{?>
                            <div style="background-color: white; padding:1em;">
                            <?php print(($getal));?> 
                            </div> <?php } ?>    
                        
                        
                    </td>
                    <?php } ?>
                </tr> 
                    <?php } ?>
           
            </tbody> 
        </table> 
    </body> 
</html>


<!DOCTYPE HTML> 
<html> 
    <head> 
        <meta charset=utf-8> 
        <title>Tafels</title> 
    </head> 
    <body> 
        
        <table border="1" > 
            <tbody >
                <tr>
                    <td></td>
                    <?php for($a=1;$a<=10;$a++) { ?>
                     <td style="padding: 0.25em;">  
                        <?php print($a);?> 
                    </td>
                    <?php } ?>
                </tr>
                
                 <?php for($i=1;$i<=10;$i++) { ?>
                <tr> 
                    <td style="padding: 0.25em;">
                       <?php print($i);?>  
                    </td>
                    <?php for($j=1;$j<=10;$j++) { ?>
                     <td style="padding: 0.25em;">  
                        <?php print($j*$i);?> 
                    </td>
                    <?php } ?>
                </tr> 
                    <?php } ?>
            </tbody> 
        </table> 
    </body> 
</html>


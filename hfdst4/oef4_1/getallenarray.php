<?php

//getallenarray.php

class GetalArrayGenerator {

    public function getArray() {
        $tab = array();
        for ($i = 0; $i < 20; $i++) {
            $willekeurigGetal = rand(-50, 50);
            $tab[$i] = $willekeurigGetal;
        }
        return $tab;
    }

}
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Willekeurige getallen</title>
    </head>
    <body>
        <pre>
            <?php
            $arrGen = new GetalArrayGenerator();
            print_r($arrGen->getArray());
            ?>
        </pre>

    </body>
</html>

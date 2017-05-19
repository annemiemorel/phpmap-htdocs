<?php
//toongetallen.php

require_once("GetallenReeksMaker.php");
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Getallenreeks</title>
    </head>
    <body>
        <?php
        $getallenReeksMaker = new GetallenReeksMaker();
        $tabel = $getallenReeksMaker->getReeks();
        ?>

        <!-- De presentatielaag dient aangepast te worden. -->
        <table border="1">
            <tbody>
                <tr>
                    <?php
                    foreach ($tabel as $getal) {
                        ?>
                        <td>
                            <?php print($getal); ?>
                        </td>
                        <?php
                    }
                    ?>
                </tr>
            </tbody>
        </table>
    </body>
</html>

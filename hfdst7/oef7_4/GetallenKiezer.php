<?php

//GetallenKiezer.php

class GetallenKiezer {

    public function getGetallenReeks() {
        $tab = array();
        while (count($tab) < 6) {
            $getal = rand(1, 42);
            if (!in_array($getal, $tab)) {
                array_push($tab, $getal);
            }
        }
        return $tab;
    }

}

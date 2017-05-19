<?php

//GetallenReeksMaker.php

class GetallenReeksMaker {

    public function getReeks() {
//        return array(3, 8, 60, 90);
        $tab = array();
        for ($i = 0; $i < 10; $i++) {
            array_push($tab, rand(1, 100));
        }
        sort($tab);
        return $tab;
    }

}

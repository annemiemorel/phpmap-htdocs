<?php

//business/GenreService.php

namespace VDAB\MijnProject\Business;
use VDAB\MijnProject\Data\GenreDAO;

class GenreService {

    public function getGenresOverzicht() {
        $genreDAO = new GenreDAO();
        $lijst = $genreDAO->getAll();
        return $lijst;
    }

}

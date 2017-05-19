<?php 
require_once 'Bericht.php';
//dbGegevensToevoegen.php 
class BerichtLijst { 
    public function getBericht() { 
       // echo "getBericht";
        $sql = "select id, auteur, boodschap, datum from gastenboek"; // order by datum";
        $dbh = new PDO("mysql:host=localhost;dbname=cursusphp;charset=utf8;port=3307", "cursusgebruiker", "cursuspwd"); 
        $stmt = $dbh->prepare($sql);
        //print_r($stmt);
        $stmt->execute();
        $resultSet = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //print_r($resultSet);
        $lijst = array();
        foreach ($resultSet as $rij) {
            $message = new Bericht2($rij["id"], $rij["auteur"], $rij["boodschap"], $rij["datum"]);
            //echo $rij["auteur"]." * " . $rij["boodschap"];
            array_push($lijst, $message);
        }
        //print_r($lijst);
        $dbh = null;
        
        return $lijst;
    } 
    public function createBericht($auteur, $boodschap) { 
        //echo "createBericht";
        $sql = "insert into gastenboek (auteur, boodschap,datum) values (:auteur, :boodschap, :datum)"; 
        $dbh = new PDO("mysql:host=localhost;dbname=cursusphp;charset=utf8;port=3307","cursusgebruiker", "cursuspwd");
        $stmt= $dbh->prepare($sql); 
        $datum = date("Y-m-d H:i:s");
        $stmt->execute(array(':auteur' => $auteur, ':boodschap' => $boodschap, ':datum' => $datum)); 
        //$laatsteId = $dbh->lastInsertId(); //ID van laatste record bekomen, indien er autonummering gebruikt wordt in de tabel
        //print($laatsteId);
        $dbh = null; 
        
    } 
    public function deleteBericht($id) {
        $sql = "delete from gastenboek where id = :id";
       
        $dbh = new PDO("mysql:host=localhost;dbname=cursusphp;charset=utf8;port=3307","cursusgebruiker", "cursuspwd");

        $stmt = $dbh->prepare($sql);
        $stmt->execute(array(':id' => $id));
        $dbh = null;
    }
//    public function updateBericht($id, $titel, $duurtijd) {
//        //print $id . " * " . $titel . " * " . $duurtijd;
////        echo "updatefilm";
//        $sql = "update films set titel= :titel, duurtijd=:duurtijd where id = :id";
//        $dbh = new PDO("mysql:host=localhost;dbname=cursusphp;charset=utf8;port=3307","cursusgebruiker", "cursuspwd");
//
//        $stmt = $dbh->prepare($sql);
//        $stmt->execute(array(':id' => $id, ':titel' => $titel, ':duurtijd' => $duurtijd));
//        $dbh = null;
//    }
//    public function updateFilm($film) {
//        $sql = "update films set titel = :titel, duurtijd = :duurtijd where id = :id";
//        $dbh = new PDO("mysql:host=localhost;dbname=cursusphp;charset=utf8;port=3307","cursusgebruiker", "cursuspwd");//PDO($this->dbConn, $this->dbUsername, $this->dbPassword);
//        
//        $stmt = $dbh->prepare($sql);
//        $stmt->execute(array(
//            ':titel' => $film->getTitel(),
//            ':duurtijd' => $film->getDuurtijd(),
//            ':id' => $film->getId()));
//        $dbh = null;   
//    }
} 
?> 



<?php 
require_once 'Munt.php';
//dbGegevensToevoegen.php 
class MuntLijst { 
    public function getMunt($rijnummer, $kolomnummer) { 
       // echo "getBericht";
        $sql = "select status from vieropeenrij_spelbord where rijnummer=$rijnummer and kolomnummer=$kolomnummer"; // order by datum";
        $dbh = new PDO("mysql:host=localhost;dbname=cursusphp;charset=utf8;port=3307", "cursusgebruiker", "cursuspwd"); 
        $stmt = $dbh->prepare($sql);
        //print_r($stmt);
        $stmt->execute();
        $resultSet = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //print_r($resultSet);
        $lijst = array();
        foreach ($resultSet as $rij) {
            $message = new Munt($rijnummer, $kolomnummer, $rij["status"]);
            //echo $rij["auteur"]." * " . $rij["boodschap"];
            
            array_push($lijst, $message);
            
        }
        //print_r($lijst);
        $dbh = null;
        
        return $lijst;
    } 
    public function plaatsMunt($rijnummer, $kolomnummer, $status) { 
        echo "plaatsMunt";
        $sql = "update vieropeenrij_spelbord  set status = :status where rijnummer = :rijnummer and kolomnummer= :kolomnummer";
        $dbh = new PDO("mysql:host=localhost;dbname=cursusphp;charset=utf8;port=3307","cursusgebruiker", "cursuspwd");
        $stmt= $dbh->prepare($sql); 
//        $datum = date("Y-m-d H:i:s");
        $stmt->execute(array(':rijnummer' => $rijnummer, ':kolomnummer' => $kolomnummer, ':status' => $status)); 
        //$laatsteId = $dbh->lastInsertId(); //ID van laatste record bekomen, indien er autonummering gebruikt wordt in de tabel
        //print($laatsteId);
        $dbh = null; 
        
    } 
    public function geenMunt($rijnummer, $kolomnummer) {
        $sql = "update vieropeenrij_spelbord  set status = 0 where rijnummer = :rijnummer and kolomnummer= :kolomnummer";
       
        $dbh = new PDO("mysql:host=localhost;dbname=cursusphp;charset=utf8;port=3307","cursusgebruiker", "cursuspwd");

        $stmt = $dbh->prepare($sql);
        $stmt->execute(array(':rijnummer' => $rijnummer, ':kolomnummer' => $kolomnummer));
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



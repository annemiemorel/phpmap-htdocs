<?php 
//dbGegevensToevoegen.php 
class FilmsToevoegen { 
    public function createFilm($titel, $duurtijd) { 
        
//        $titel=$_POST["titel"];
//        $duurtijd=$_POST["duurtijd"];
        $sql = "insert into films (titel, duurtijd) values (:titel, :duurtijd)"; 
        $dbh = new PDO("mysql:host=localhost;dbname=cursusphp;charset=utf8;port=3307", "root", "");
        $stmt= $dbh->prepare($sql); 
        $stmt->execute(array(':titel' => $titel, ':duurtijd' => $duurtijd)); 
        //$laatsteId = $dbh->lastInsertId(); //ID van laatste record bekomen, indien er autonummering gebruikt wordt in de tabel
        //print($laatsteId);
        $dbh = null; 
        
    } 
    public function deleteFilm($id) {
        $sql = "delete from films where id = :id";
        $dbh = new PDO("mysql:host=localhost;dbname=cursusphp;charset=utf8;port=3307", "root", ""); 

        $stmt = $dbh->prepare($sql);
        $stmt->execute(array(
            ':id' => $id));
        $dbh = null;
    }
} 
?> 



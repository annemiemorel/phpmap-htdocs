<?php
//random.php

session_start();

if (!isset($_SESSION["schatnr"])) {
    $_SESSION["schatnr"] = rand(1, 7);
}
$schatnr=$_SESSION["schatnr"];
$schatArray=$_SESSION["schatArray"];
print_r($schatArray);
?>




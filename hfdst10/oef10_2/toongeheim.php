<?php
//toongeheim.php
session_start();

if (isset($_SESSION["aangemeld"]) && $_SESSION["aangemeld"]==true) {
	include("presentation/geheimeinformatie.php");
        $_SESSION["aangemeld"]==false;
}else{
    header("location: aanmelden.php");
	exit(0);
}



<?php

//aanmelden.php

session_start();
require_once("business/UserService.php");

if (isset($_GET["action"]) && $_GET["action"] == "login") {
    $toegelaten = UserService::controleerGebruiker($_POST["txtGebruikersnaam"], $_POST["txtWachtwoord"]);
    
    if ($toegelaten) {
        $_SESSION["aangemeld"] = true;
        header("location: toongeheim.php");
        exit(0);
        
    } else {
        header("location: aanmelden.php");
        exit(0);
    }
    
} else {
    include("presentation/loginform.php");
}


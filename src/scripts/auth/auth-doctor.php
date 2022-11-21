<?php
    session_start();

    // Auth
    if(!isset($_SESSION["doctor-loggedin"]) || $_SESSION["doctor-loggedin"] === false){
        header("location: ../access-denied.php");
        die();
    }
?>
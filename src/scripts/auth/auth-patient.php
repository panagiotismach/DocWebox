<?php
    session_start();

    // Auth
    if(!isset($_SESSION["patient-loggedin"]) || $_SESSION["patient-loggedin"] === false){
        header("location: ../access-denied.php");
        die();
    }
?>
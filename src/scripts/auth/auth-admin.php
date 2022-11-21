<?php
    session_start();
        
    // Auth
    if(!isset($_SESSION["admin-loggedin"]) || $_SESSION["admin-loggedin"] === false){
        header("location: ../access-denied.php");
        die();
    }
?>
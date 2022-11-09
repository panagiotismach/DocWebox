<?php

    require_once(dirname(__DIR__).'./scripts/configuration/config.php');

    // Try to connecto to db
    $mysqli = new mysqli(SERVER, DATABASE_USERNAME, DATABASE_PASSWORD, DATABASE_NAME);
    
    // Check connection
    if($mysqli === false){
        die("ERROR: Could not connect. " . $mysqli->connect_error);
    }
?>
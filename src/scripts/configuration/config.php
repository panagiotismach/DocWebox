<?php

    define('SERVER', 'localhost');
    define('DATABASE_NAME', 'docwebox');
    define('DATABASE_USERNAME', 'root');
    define('DATABASE_PASSWORD', '');
    
    $mysqli = new mysqli(SERVER, DATABASE_NAME, DATABASE_USERNAME, DATABASE_PASSWORD);
    
    if($mysqli === false){
        die("ERROR: Could not connect. " . $mysqli->connect_error);
    }
?>


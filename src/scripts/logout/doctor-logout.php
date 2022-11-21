<?php
    // Initialize the session
    session_start();
    
    // Remove session variables
    unset($_SESSION["doctor-loggedin"]);
    unset($_SESSION["doctorObj"]);

    // Redirect to login page
    header("location: ../../../index.php");
    exit;
?>
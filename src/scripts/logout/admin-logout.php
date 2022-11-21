<?php
    // Initialize the session
    session_start();
    
    // Remove session variables
    unset($_SESSION["admin-loggedin"]);
    unset($_SESSION["id"]);

    // Redirect to login page
    header("location: ../../../index.php");
    exit;
?>
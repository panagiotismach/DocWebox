<?php
    // Initialize the session
    session_start();
    
    // Remove session variables
    unset($_SESSION["patient-loggedin"]);
    unset($_SESSION["patientObj"]);

    // Redirect to login page
    header("location: ../../../index.php");
    exit;
?>
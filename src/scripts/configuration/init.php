<?php

    require "config.php";

    $mysqli = new mysqli(SERVER, DATABASE_USERNAME, DATABASE_PASSWORD);

    // Check connection
    if($mysqli === false){
        die("ERROR: Could not connect. " . $mysqli->connect_error);
    }

    $sql = "CREATE DATABASE IF NOT EXISTS docwebox";

    if($mysqli->query($sql) === false){
        echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
    }

    $mysqli -> select_db("docwebox");

    $sql = "CREATE TABLE IF NOT EXISTS docwebox.`admin` (
        `id` int(11) NOT NULL,
        `username` varchar(20) NOT NULL,
        `password` varchar(40) NOT NULL
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
      ";
    
    if($mysqli->query($sql) === false){
        echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
    }

    $sql = "CREATE TABLE IF NOT EXISTS docwebox.`appointment` (
        `id` int(11) NOT NULL,
        `doctor_id` int(11) NOT NULL,
        `patient_id` int(11) NOT NULL,
        `date` varchar(50) NOT NULL,
        `time` varchar(20) NOT NULL,
        `description` varchar(255) NOT NULL
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
      ";
    
    if($mysqli->query($sql) === false){
        echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
    }

    $sql = "CREATE TABLE IF NOT EXISTS docwebox.`doctor` (
        `id` int(11) NOT NULL,
        `firstname` varchar(40) NOT NULL,
        `lastname` varchar(40) NOT NULL,
        `username` varchar(20) NOT NULL,
        `email` varchar(255) NOT NULL,
        `password` varchar(50) NOT NULL,
        `phone` varchar(50) NOT NULL,
        `specialization` varchar(255) NOT NULL,
        `vat` varchar(40) NOT NULL,
        `location` varchar(255) NOT NULL,
        `image` varchar(255) NOT NULL
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
      ";
    
    if($mysqli->query($sql) === false){
        echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
    }

    $sql = "CREATE TABLE IF NOT EXISTS docwebox.`patient` (
        `id` int(11) NOT NULL,
        `firstname` varchar(40) NOT NULL,
        `lastname` varchar(40) NOT NULL,
        `username` varchar(20) NOT NULL,
        `email` varchar(255) NOT NULL,
        `password` varchar(50) NOT NULL,
        `phone` varchar(50) NOT NULL,
        `image` varchar(255) NOT NULL
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
      ";
    
    if($mysqli->query($sql) === false){
        echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
    }

    // Close connection
    $mysqli->close();
?>
<?php

    require_once "../../db/connect.php";
    include_once "../../scripts/services/doctorService.php";

    
    
    

    $mysqli->select_db("docwebox");
    $doctorService = new DoctorService("doctor", $mysqli);

    if($_SERVER['REQUEST_METHOD'] == "GET"){
        $data = null;
        

      
        
        $lastname = $_GET["lastname"];
        
        

        if($lastname){
            $data = $doctorService->findDoctorByLastname($lastname);
        }

        
        header("Content-Type: application/json");
        echo json_encode($data);

    }

    $mysqli->close();


?>
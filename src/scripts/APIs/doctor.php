<?php

    require_once "../../db/connect.php";
    include_once "../../scripts/services/doctorService.php";

    
    
    $mysqli->select_db("docwebox");
    $doctorService = new DoctorService("doctor", $mysqli);

    if($_SERVER['REQUEST_METHOD'] == "GET"){
        $data = null;
        

      
        
        $specialization = $_GET["specialization"];
        

        if($specialization){
            $data = $doctorService->findAllDoctorsBySpecialization($specialization);
        }


        
        
        header("Content-Type: application/json");
        
        echo json_encode($data);

    }

    $mysqli->close();


?>
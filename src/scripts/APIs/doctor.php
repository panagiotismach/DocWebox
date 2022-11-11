<?php

    require_once "../../db/connect.php";
    include_once "../../scripts/services/doctorService.php";

    
    
    $mysqli->select_db("docwebox");
    $doctorService = new DoctorService("doctor", $mysqli);

    if($_SERVER['REQUEST_METHOD'] == "GET"){
        $data = null;
        

      
        
        $specialization = $_GET["specialization"];
        $location = $_GET["location"];

        

        if($specialization && $location){
            $data = $doctorService->findAllDoctorsByLocationSpecialization($location,$specialization);
        }


        
        
        header("Content-Type: application/json");
        
        echo json_encode($data);

    }

    $mysqli->close();


?>
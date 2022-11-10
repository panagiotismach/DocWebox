<?php

    require_once "../../db/connect.php";
    include_once "../../scripts/services/appointmentService.php";

    $mysqli->select_db("docwebox");
    $appointmentService = new AppointmentService("appointment", $mysqli);

    if($_SERVER['REQUEST_METHOD'] == "GET"){
        $data = null;
        
        $patient_id = $_GET["patient_id"];

        
        $data = $appointmentService->findDoctorAppointments($patient_id);
        

        
        header("Content-Type: application/json");
        echo json_encode($data);

    }

    $mysqli->close();


?>
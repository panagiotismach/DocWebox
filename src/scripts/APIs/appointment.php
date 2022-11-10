<?php

    require_once "../../db/connect.php";
    include_once "../../scripts/services/appointmentService.php";

    $mysqli->select_db("docwebox");
    $appointmentService = new AppointmentService("appointment", $mysqli);

    if($_SERVER['REQUEST_METHOD'] == "GET"){
        $data = null;
        
        $doctor_id = $_GET["doctor_id"]

        
            $data = $appointmentService->findDoctorAppointments($doctor_id);
        

        
        header("Content-Type: application/json");
        echo json_encode($data);

    }

    $mysqli->close();


?>
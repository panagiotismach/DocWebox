<?php

    require_once "../../db/connect.php";
    include_once "../../scripts/services/appointmentService.php";

    include "../../scripts/utils/validation-data.php";

    $mysqli->select_db("docwebox");
    $appointmentService = new AppointmentService("appointment", $mysqli);

    if($_SERVER['REQUEST_METHOD'] == "GET"){
        $data = null;

        if(isset($_GET["doctor_id"])){
            $doctor_id = validate_data($_GET['doctor_id']);
            $data = $appointmentService->findDoctorAppointments($doctor_id);
        }

        if(isset($_GET["patient_id"])){
            $patient_id = validate_data($_GET['patient_id']);
            $data = $appointmentService->findPatientAppointments($patient_id);       
        }
        
        header("Content-Type: application/json");
        
        echo json_encode($data);
    }else if($_SERVER['REQUEST_METHOD'] == "POST"){
        $data = null;

        $entityBody = file_get_contents('php://input');

        $appointentBody = json_encode($entityBody);

       echo $appointentBody;

      $appointment = new Appointment( null, $appointentBody->doctor_id, $appointentBody->patient_id, $appointentBody->date, $appointentBody->time, $appointentBody->description,null); 

       $appointmentService->addAppointment($appointment);

       

        
    }

    $mysqli->close();
?>
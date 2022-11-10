<?php
    require_once "../../db/connect.php";
    include_once "../../scripts/services/patientService.php";
    $mysqli->select_db("docwebox");
    $patientService = new PatientService("patient", $mysqli);

    if($_SERVER['REQUEST_METHOD'] == "GET"){
        $data = null;

        $lastname = $_GET["lastname"];

        if($lastname){
            $data = $patientService->findPatientByLastname($lastname);
        }

        header("Content-Type: application/json");
        echo json_encode($data);
    }

    $mysqli->close();

?>
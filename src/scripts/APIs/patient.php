<?php
    require_once "../../db/connect.php";
    include_once "../../scripts/services/patientService.php";
    include "../../scripts/utils/validation-data.php";

    $mysqli->select_db("docwebox");
    $patientService = new PatientService("patient", $mysqli);

    if($_SERVER['REQUEST_METHOD'] == "GET"){
        $data = null;

        if (count($_GET) == 0) {
            $data = $patientService->findAllPatients();
        }

        if(isset($_GET["id"])){
            $id = validate_data($_GET['id']);
            $data = $patientService->findPatientById($id);
        }

        if(isset($_GET["firstname"])){
            $firstname = validate_data($_GET['firstname']);
            $data = $patientService->findPatientByFirstname($firstname);       
        }

        if(isset($_GET["lastname"])){
            $lastname = validate_data($_GET['lastname']);
            $data = $patientService->findPatientByLastname($lastname);
        }

        header("Content-Type: application/json");
        
        echo json_encode($data);
    } else if ($_SERVER['REQUEST_METHOD'] == "PUT"){

        //Data will pass into body in json format
        $patientBody = file_get_contents('php://input');
        
        $patientProvided = json_decode($patientBody);
        
        $data = $patientService->updatePatientInfo($patientProvided);
        
        header("Content-Type: application/json");
        echo json_encode($data);
    }

    $mysqli->close();

?>
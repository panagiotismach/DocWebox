<?php
    require_once "../../db/connect.php";
    include_once "../../scripts/services/doctorService.php";
    include "../../scripts/utils/validation-data.php";
    
    $mysqli->select_db("docwebox");
    $doctorService = new DoctorService("doctor", $mysqli);

    if($_SERVER['REQUEST_METHOD'] == "GET"){
        $data = null;

        if (count($_GET) == 0) {
            $data = $doctorService->findAllDoctors();
        }

        if(isset($_GET["id"])){
            $id = validate_data($_GET['id']);
            $data = $doctorService->findDoctorById($id);
        }

        if(isset($_GET["firstname"])){
            $firstname = validate_data($_GET['firstname']);
            $data = $doctorService->findDoctorByFirstname($firstname);       
        }

        if(isset($_GET["lastname"])){
            $lastname = validate_data($_GET['lastname']);
            $data = $doctorService->findDoctorByLastname($lastname);
        }

        if (isset($_GET["startsWith"])) {
            $startsWith = validate_data($_GET['startsWith']);
            $data = $doctorService->findDoctorByFirstCharsInLastname($startsWith);
        }

        if(isset($_GET["location"]) && !isset($_GET["specialization"])){
            $location = validate_data($_GET['location']);
            $data = $doctorService->findAllDoctorsByLocation($location);
        }else if(isset($_GET["specialization"]) && !isset($_GET["location"])){
            $specialization = validate_data($_GET['specialization']);
            $data = $doctorService->findAllDoctorsBySpecialization($specialization);
        }else if(isset($_GET["location"]) && isset($_GET["specialization"])){
            $location = validate_data($_GET['location']);
            $specialization = validate_data($_GET['specialization']);
            $data = $doctorService->findAllDoctorsByLocationSpecialization($location, $specialization);
        }

        header("Content-Type: application/json");
        
        echo json_encode($data);
    } else if ($_SERVER['REQUEST_METHOD'] == "PUT"){

        //Data will pass into body in json format
        $doctorBody = file_get_contents('php://input');
        
        $doctorProvided = json_decode($doctorBody);
        
        $data = $doctorService->updateDoctorInfo($doctorProvided);
        
        header("Content-Type: application/json");
        
        echo json_encode($data);
    }

    $mysqli->close();

?>

 
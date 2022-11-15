<?php 
    
    require("../models/patient.php");
        
    class PatientService {

        private $table;
        private $mysqli;
        
        public function __construct($table, $mysqliConnection){
            $this->table = $table;
            $this->mysqli = $mysqliConnection;
        }

        public function findPatientById($id){
            $patient = null;
            try {
                $sql = "SELECT * FROM `$this->table` WHERE `id` = $id";
                $result = $this->mysqli->query($sql);
                $row = $result->fetch_assoc();
                if($result->num_rows > 0){
                    $patient = new Patient($row["id"], $row["firstname"], $row["lastname"], $row["username"], $row["email"], $row["password"], $row["phone"], $row["location"], $row["image"], $row["created"]);
                }
            }catch(Exception $error){
                echo 'Error Message: ' .$error->getMessage();
            } 
            return $patient;
        }

        public function findPatientByFirstname($firstname){
            $patient = null;
            try{
                $sql = "SELECT * FROM `$this->table` WHERE `firstname` = '$firstname'";
                $result = $this->mysqli->query($sql);
                $row = $result->fetch_assoc();
                if($result->num_rows > 0){
                    $patient = new Patient($row["id"], $row["firstname"], $row["lastname"], $row["username"], $row["email"], $row["password"], $row["phone"], $row["location"], $row["image"],$row["created"]);
                }
            }catch(Exception $e){
                echo 'Message: ' .$e->getMessage();
            }

            return $patient;
        }

        public function findPatientByLastname($lastname){
            $patient = null;
            try{
                $sql = "SELECT * FROM `$this->table` WHERE `lastname` = '$lastname'";
                $result = $this->mysqli->query($sql);
                $row = $result->fetch_assoc();
                if($result->num_rows > 0){
                    $patient = new Patient($row["id"], $row["firstname"], $row["lastname"], $row["username"], $row["email"], $row["password"], $row["phone"], $row["location"], $row["image"],$row["created"]);
                }
            }catch(Exception $e){
                echo 'Message: ' .$e->getMessage();
            }

            return $patient;
        }

        public function updatePatientNonSensitiveInfo($patientObj){
            try {
                $patientFound = $this->findPatientById($patientObj->id);

                if($patientFound == null){
                    return "Patient doesn't exist!";
                }
    
                $firstname = $patientFound->firstname;
                $lastname = $patientFound->lastname;
                $phone = $patientFound->phone;
                $location = $patientFound->location;
                $image = $patientFound->image;
                
                if(property_exists($patientObj, 'firstname') && strcmp($patientObj->firstname, "") !== 0 && strcmp($firstname, $patientObj->firstname) !== 0){
                    $firstname = $patientObj->firstname;
                }

                if(property_exists($patientObj, 'lastname') && strcmp($patientObj->lastname, "") !== 0 && strcmp($lastname, $patientObj->lastname) !== 0){
                    $lastname = $patientObj->lastname;
                }
                
                if(property_exists($patientObj, 'phone') && strcmp($patientObj->phone, "") !== 0 && strcmp($phone, $patientObj->phone) !== 0){
                    $phone = $patientObj->phone;
                }
                
                if(property_exists($patientObj, 'location') && strcmp($location, $patientObj->location) !== 0){
                    $location = $patientObj->location;
                }
                
                if(property_exists($patientObj, 'image') !== 0 && strcmp($image, $patientObj->image) !== 0){
                    $image = $patientObj->image;
                }

                $sql = "UPDATE `$this->table` SET `firstname` = '$firstname', `lastname` = '$lastname', `phone` = '$phone', 
                                `location` = '$location', `image` = '$image' WHERE `id` = $patientObj->id";
                $result = $this->mysqli->query($sql);
                
                return $this->findPatientById($patientFound->id);
    
            }catch(Exception $e){
                echo 'Message: ' .$e->getMessage();
            }
        }
    }
?>
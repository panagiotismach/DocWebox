
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
                    $patient = new Patient($row["id"], $row["firstname"], $row["lastname"], $row["username"], $row["email"], $row["password"], $row["phone"], $row["image"],$row["created"]);
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
                    $patient = new Patient($row["id"], $row["firstname"], $row["lastname"], $row["username"], $row["email"], $row["password"], $row["phone"], $row["image"],$row["created"]);
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
                    $patient = new Patient($row["id"], $row["firstname"], $row["lastname"], $row["username"], $row["email"], $row["password"], $row["phone"], $row["image"],$row["created"]);
                }
            }catch(Exception $e){
                echo 'Message: ' .$e->getMessage();
            }

            return $patient;
   
        }
    }

        


?>
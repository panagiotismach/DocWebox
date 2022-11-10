
<?php 
    
    require("../models/doctor.php");
        
    class DoctorService {

        
        private $table;
        private $mysqli;
        

        public function __construct($table, $mysqliConnection){
            $this->table = $table;
            $this->mysqli = $mysqliConnection;
        }

        public function findDoctorById($id){
            $doctor = null;
            try {
                $sql = "SELECT * FROM `$this->table` WHERE `id` = $id";
                $result = $this->mysqli->query($sql);
                $row = $result->fetch_assoc();
                if($result->num_rows > 0){
                    $doctor = new Doctor($row["id"], $row["firstname"], $row["lastname"], $row["username"], $row["email"], $row["password"], $row["phone"], $row["specialization"], $row["vat"], $row["location"], $row["image"]);
                }
            }catch(Exception $error){
                echo 'Error Message: ' .$error->getMessage();
            } 
            return $doctor;
        }

        public function findDoctorByFirstname($firstname){
            $doctor = null;
            try{
                $sql = "SELECT * FROM `$this->table` WHERE `firstname` = '$firstname'";
                $result = $this->mysqli->query($sql);
                $row = $result->fetch_assoc();
                if($result->num_rows > 0){
                    $doctor = new Doctor($row["id"], $row["firstname"], $row["lastname"], $row["username"], $row["email"], $row["password"], $row["phone"],  $row["specialization"], $row["vat"], $row["location"], $row["image"]);
                }
            }catch(Exception $error){
                echo 'Message: ' .$error->getMessage();
            }

            return $doctor;
   
        }

        public function findDoctorByLastname($lastname){
            $doctor = null;
            try{
                $sql = "SELECT * FROM `$this->table` WHERE `lastname` = '$lastname'";
                $result = $this->mysqli->query($sql);
                $row = $result->fetch_assoc();
                if($result->num_rows > 0){
                    $doctor = new Doctor($row["id"], $row["firstname"], $row["lastname"], $row["username"], $row["email"], $row["password"], $row["phone"], $row["specialization"], $row["vat"], $row["location"], $row["image"]);
                }
            }catch(Exception $error){
                echo 'Message: ' .$e->getMessage();
            }

            return $doctor;
   
        }
    }

        


?>
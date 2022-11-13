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

                    $doctor = new Doctor($row["id"], $row["firstname"], $row["lastname"], $row["phone"], $row["specialization"], $row["location"]);

                    // $doctor = new Doctor($row["id"], $row["firstname"], $row["lastname"], $row["username"], $row["email"], $row["password"], $row["phone"], $row["specialization"], $row["vat"], $row["num_patients"], $row["num_publications"], $row["work_experience_years"], $row["bio"], $row["location"], $row["image"], $row["created"]);

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
                    $doctor = new Doctor($row["id"], $row["firstname"], $row["lastname"], $row["username"], $row["email"], $row["password"], $row["phone"],  $row["specialization"], $row["vat"], $row["num_patients"], $row["num_publications"], $row["work_experience_years"], $row["bio"], $row["location"], $row["image"], $row["created"]);
                }
            }catch(Exception $error){
                echo 'Message: ' .$error->getMessage();
            }

            return $doctor;
   
        }

        public function findDoctorByLastname($lastname){
            $doctors = array();
            try{
                $sql = "SELECT * FROM `$this->table` WHERE `lastname` = '$lastname'";
                $result = $this->mysqli->query($sql);
                while($row = $result->fetch_assoc()){
                    $doctor = new Doctor($row["id"], $row["firstname"], $row["lastname"], $row["phone"], $row["specialization"], $row["location"]);
                    array_push($doctors, $doctor);
                }
                // $row = $result->fetch_assoc();
                // if($result->num_rows > 0){
                //     $doctor = new Doctor($row["id"], $row["firstname"], $row["lastname"], $row["username"], $row["email"], $row["password"], $row["phone"], $row["specialization"], $row["vat"], $row["num_patients"], $row["num_publications"], $row["work_experience_years"], $row["bio"], $row["location"], $row["image"], $row["created"]);

                // }
            }catch(Exception $error){
                echo 'Message: ' .$e->getMessage();
            }

            return $doctors;
   
        }

        public function findAllDoctorsByLocation($location){
            $doctors = array();
            try{
                $sql = "SELECT * FROM `$this->table` WHERE `location` = '$location'";
                $result = $this->mysqli->query($sql);
                while($row = $result->fetch_assoc()){
                   
                   $doctor = new Doctor($row["id"], $row["firstname"], $row["lastname"], $row["username"], $row["email"], $row["password"], $row["phone"], $row["specialization"], $row["vat"], $row["num_patients"], $row["num_publications"], $row["work_experience_years"], $row["bio"], $row["location"], $row["image"], $row["created"]);
                    array_push($doctors, $doctor);
                 }  


            }catch(Exception $error){
                echo 'Message: ' .$error->getMessage();
            }

            return $doctors;
   
        }

        public function findAllDoctorsBySpecialization($specialization){
            $doctors = array();
            try{
                $sql = "SELECT * FROM `$this->table` WHERE `specialization` = '$specialization'";
                $result = $this->mysqli->query($sql);
                while($row = $result->fetch_assoc()){
                   
                   $doctor = new Doctor($row["id"], $row["firstname"], $row["lastname"], $row["username"], $row["email"], $row["password"], $row["phone"], $row["specialization"], $row["vat"], $row["num_patients"], $row["num_publications"], $row["work_experience_years"], $row["bio"], $row["location"], $row["image"], $row["created"]);
                    array_push($doctors, $doctor);
                 }  


            }catch(Exception $error){
                echo 'Message: ' .$error->getMessage();
            }

            return $doctors;
   
        }

        public function findAllDoctorsByLocationSpecialization($location,$specialization){
            $doctors = array();
            try{
                $sql = "SELECT * FROM `$this->table` WHERE `location` = '$location' AND `specialization` = '$specialization'";
                $result = $this->mysqli->query($sql);
                while($row = $result->fetch_assoc()){
                   
                   $doctor = new Doctor($row["id"], $row["firstname"], $row["lastname"], $row["username"], $row["email"], $row["password"], $row["phone"], $row["specialization"], $row["vat"], $row["num_patients"], $row["num_publications"], $row["work_experience_years"], $row["bio"], $row["location"], $row["image"], $row["created"]);
                    array_push($doctors, $doctor);
                 }  


            }catch(Exception $error){
                echo 'Message: ' .$error->getMessage();
            }

            return $doctors;
   
        }
    }

?>
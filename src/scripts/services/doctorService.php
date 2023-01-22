<?php 
    
    require("../models/doctor.php");
        
    class DoctorService {

        private $table;
        private $mysqli;
        
        public function __construct($table, $mysqliConnection){
            $this->table = $table;
            $this->mysqli = $mysqliConnection;
        }

        public function findAllDoctors() {
            $doctors = array();

            try{
                $sql = "SELECT * FROM `$this->table`";
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

        public function findDoctorById($id){
            $doctor = null;
            try {
                $sql = "SELECT * FROM `$this->table` WHERE `id` = $id";
                $result = $this->mysqli->query($sql);
                $row = $result->fetch_assoc();
                if($result->num_rows > 0){
                    $doctor = new Doctor($row["id"], $row["firstname"], $row["lastname"], $row["username"], $row["email"], $row["password"], $row["phone"], $row["specialization"], $row["vat"], $row["num_patients"], $row["num_publications"], $row["work_experience_years"], $row["bio"], $row["location"], $row["image"], $row["created"]);
                }
            }catch(Exception $error){
                echo 'Error Message: ' .$error->getMessage();
            } 

            return $doctor;
        }

        public function findDoctorByFirstname($firstname){
            $doctors = array();

            try{
                $sql = "SELECT * FROM `$this->table` WHERE `firstname` = '$firstname'";
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

        public function findDoctorByLastname($lastname){
            $doctors = array();
            
            try{
                $sql = "SELECT * FROM `$this->table` WHERE `lastname` = '$lastname'";
                $result = $this->mysqli->query($sql);
                while($row = $result->fetch_assoc()){
                    $doctor = new Doctor($row["id"], $row["firstname"], $row["lastname"], $row["username"], $row["email"], $row["password"], $row["phone"], $row["specialization"], $row["vat"], $row["num_patients"], $row["num_publications"], $row["work_experience_years"], $row["bio"], $row["location"], $row["image"], $row["created"]);
                    array_push($doctors, $doctor);
                }
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

        public function findAllDoctorsByLocationSpecialization($location, $specialization){
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

        public function updateDoctorInfo($doctorObj){
            try {
                $doctorFound = $this->findDoctorById($doctorObj->id);

                if($doctorFound == null){
                    return "Doctor doesn't exist!";
                }
    
                //Non sensitive info
                $firstname = $doctorFound->firstname;
                $lastname = $doctorFound->lastname;
                $phone = $doctorFound->phone;
                $vat = $doctorFound->vat;
                $location = $doctorFound->location;
                $num_patients = $doctorFound->num_patients;
                $num_publications = $doctorFound->num_publications;
                $work_experience_years = $doctorFound->work_experience_years;
                $bio = $doctorFound->bio;
                $specialization = $doctorFound->specialization;
                $image = $doctorFound->image;

                //Sensitive info
                $username = $doctorFound->username;
                $email = $doctorFound->email;
                $password = $doctorFound->password;
                
                if(property_exists($doctorObj, 'firstname') && strcmp($doctorObj->firstname, "") !== 0 && strcmp($firstname, $doctorObj->firstname) !== 0){
                    $firstname = $doctorObj->firstname;
                }

                if(property_exists($doctorObj, 'lastname') && strcmp($doctorObj->lastname, "") !== 0 && strcmp($lastname, $doctorObj->lastname) !== 0){
                    $lastname = $doctorObj->lastname;
                }
                
                if(property_exists($doctorObj, 'phone') && strcmp($doctorObj->phone, "") !== 0 && strcmp($phone, $doctorObj->phone) !== 0){
                    $phone = $doctorObj->phone;
                }
                
                if(property_exists($doctorObj, 'location') && strcmp($doctorObj->location, "") !== 0 && strcmp($location, $doctorObj->location) !== 0){
                    $location = $doctorObj->location;
                }

                if(property_exists($doctorObj, 'vat') && strcmp($doctorObj->vat, "") !== 0 && strcmp($vat, $doctorObj->vat) !== 0){
                    $vat = $doctorObj->vat;
                }

                if(property_exists($doctorObj, 'num_patients') && strcmp($doctorObj->num_patients, "") !== 0 && strcmp($num_patients, $doctorObj->num_patients) !== 0){
                    $num_patients = $doctorObj->num_patients;
                }

                if(property_exists($doctorObj, 'num_publications') && strcmp($doctorObj->num_publications, "") !== 0 && 
                    strcmp($num_publications, $doctorObj->num_publications) !== 0){
                    $num_publications = $doctorObj->num_publications;
                }

                if(property_exists($doctorObj, 'work_experience_years') && strcmp($doctorObj->work_experience_years, "") !== 0 && 
                    strcmp($work_experience_years, $doctorObj->work_experience_years) !== 0){
                    $work_experience_years = $doctorObj->work_experience_years;
                }

                if(property_exists($doctorObj, 'bio') && strcmp($bio, $doctorObj->bio) !== 0){
                    $bio = $doctorObj->bio;
                }

                if(property_exists($doctorObj, 'specialization') && strcmp($doctorObj->specialization, "") !== 0 && strcmp($specialization, $doctorObj->specialization) !== 0){
                    $specialization = $doctorObj->specialization;
                }
                
                if(property_exists($doctorObj, 'image') && strcmp($image, $doctorObj->image) !== 0){
                    $image = $doctorObj->image;
                }

                if(property_exists($doctorObj, 'username') && strcmp($doctorObj->username, "") !== 0 && strcmp($username, $doctorObj->username) !== 0){
                    $username = $doctorObj->username;
                }

                if(property_exists($doctorObj, 'email') && strcmp($doctorObj->email, "") !== 0 && strcmp($email, $doctorObj->email) !== 0){
                    $email = $doctorObj->email;
                }
                
                if(property_exists($doctorObj, 'password') && strcmp($doctorObj->password, "") !== 0 && strcmp($password, $doctorObj->password) !== 0){
                    //Password previous is hashed before http put
                    $password = $doctorObj->password;
                }

                $sql = "UPDATE `$this->table` SET `firstname` = '$firstname', `lastname` = '$lastname', `phone` = '$phone', `vat` = '$vat',
                                `username` = '$username', `email` = '$email', `password` = '$password', `num_patients` = '$num_patients', 
                                `num_publications` = '$num_publications', `work_experience_years` = '$work_experience_years', `bio` = '$bio',
                                `location` = '$location', `specialization` = '$specialization', `image` = '$image' WHERE `id` = $doctorObj->id";
                $result = $this->mysqli->query($sql);
                
                return $this->findDoctorById($doctorFound->id);
    
            }catch(Exception $e){
                echo 'Message: ' .$e->getMessage();
            }
        }
    }

?>
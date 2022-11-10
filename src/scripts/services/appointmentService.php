<?php 
    
    require("../models/appointment.php");
        
    class AppointmentService {

        
        private $table;
        private $mysqli;
        

        public function __construct($table, $mysqliConnection){
            $this->table = $table;
            $this->mysqli = $mysqliConnection;
        }

        public function findDoctorAppointments($id){
            $data = array();
            try {
                $sql = "SELECT * FROM `$this->table` WHERE `doctor_id` = $id";   
                $result = $this->mysqli->query($sql);
                while($row = $result->fetch_assoc()) {
                    $appointment = new Appointment($row["id"], $row["doctor_id"], $row["patient_id"], $row["date"], $row["time"], $row["description"]);
                    array_push($data, $appointment);
                }
            }catch(Exception $error){
                echo 'Error Message: ' .$error->getMessage();
            }
            
            return $data;
        }

        public function findDoctorAppointments($id){
            $data = array();
            try {
                $sql = "SELECT * FROM `$this->table` WHERE `doctor_id` = $id";   
                $result = $this->mysqli->query($sql);
                while($row = $result->fetch_assoc()) {
                    $appointment = new Appointment($row["id"], $row["doctor_id"], $row["patient_id"], $row["date"], $row["time"], $row["description"]);
                    array_push($data, $appointment);
                }
            }catch(Exception $error){
                echo 'Error Message: ' .$error->getMessage();
            }
            
            return $data;
        }


    }

        


?>
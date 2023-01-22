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
                    $appointment = new Appointment($row["id"], $row["doctor_id"], $row["patient_id"], $row["date"], $row["time"], $row["description"], $row['created']);
                    array_push($data, $appointment);
                }
            }catch(Exception $error){
                echo 'Error Message: ' .$error->getMessage();
            }
            
            return $data;
        }

        public function findPatientAppointments($id){
            $data = array();

            try {
                $sql = "SELECT * FROM `$this->table` WHERE `patient_id` = $id";   
                $result = $this->mysqli->query($sql);
                while($row = $result->fetch_assoc()) {
                    $appointment = new Appointment($row["id"], $row["doctor_id"], $row["patient_id"], $row["date"], $row["time"], $row["description"], $row["created"]);
                    array_push($data, $appointment);
                }
            }catch(Exception $error){
                echo 'Error Message: ' .$error->getMessage();
            }
            
            return $data;
        }

        public function addAppointment($appointment){
            try {
                $sql = "INSERT INTO `$this->table` (`id`, `doctor_id`, `patient_id`, `date`, `time`, `description`) VALUES ('$appointment->id', '$appointment->doctor_id', '$appointment->patient_id', '$appointment->date', '$appointment->time', '$appointment->description')";
                $result = $this->mysqli->query($sql);
                return $appointment;
            }catch(Exception $e){
                echo 'Message: ' .$e->getMessage();
            } 
        }

        public function deleteAppointment($id, $patientid){
            try {
                $patient = "SELECT patient_id FROM `$this->table`";
                if($patient == $patientid){
                    $sql = " DELETE FROM `$this->table` WHERE `id` = $id";
                    $result = $this->mysqli->query($sql);
                }
                
            }catch(Exception $e){
                echo 'Message: ' .$e->getMessage();
            } 
        }
    
    }
?>
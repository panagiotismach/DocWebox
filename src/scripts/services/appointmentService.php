<?php 
    
    require("../models/appointment.php");
        
    class AppointmentService {

        private $table;
        private $mysqli;
        
        public function __construct($table, $mysqliConnection){
            $this->table = $table;
            $this->mysqli = $mysqliConnection;
        }

        public function findAllAppointments() {
            $appointments = array();

            try{
                $sql = "SELECT * FROM `$this->table`";

                $result = $this->mysqli->query($sql);
                
                while($row = $result->fetch_assoc()){
                    $appointment = new Appointment($row["id"], $row["doctor_id"], $row["patient_id"], $row["date"], $row["time"], $row["description"], $row['created']);

                    array_push($appointments, $appointment);
                }
            }catch(Exception $error){
                echo 'Message: ' .$error->getMessage();
            }

            return $appointments;
        }

        public function findAppointmentById($id){
            $appointment = null;

            try {
                $sql = "SELECT * FROM `$this->table` WHERE `id` = $id";

                $result = $this->mysqli->query($sql);

                $row = $result->fetch_assoc();

                if($result->num_rows > 0){
                    $appointment = new Appointment($row["id"], $row["doctor_id"], $row["patient_id"], $row["date"], $row["time"], $row["description"], $row['created']);
                }
            }catch(Exception $error){
                echo 'Error Message: ' .$error->getMessage();
            } 

            return $appointment;
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

        public function findAppointmentsByDate($date) {
            $appointments = array();

            try {
                $sql = "SELECT * FROM `$this->table` WHERE `date` = '$date'";  

                $result = $this->mysqli->query($sql);
                
                while($row = $result->fetch_assoc()) {
                    $appointment = new Appointment($row["id"], $row["doctor_id"], $row["patient_id"], $row["date"], $row["time"], $row["description"], $row["created"]);
                    array_push($appointments, $appointment);
                }
            }catch(Exception $error){
                echo 'Error Message: ' .$error->getMessage();
            }
            
            return $appointments;
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
                $patient = "SELECT patient_id FROM `$this->table` WHERE `id` = $id";

                $idp = $this->mysqli->query($patient);
                 
                if($ap = $idp->fetch_assoc()){

                    if($ap["patient_id"] == $patientid){
                        $sql = " DELETE FROM `$this->table` WHERE `id` = $id";
                        $result = $this->mysqli->query($sql);
                    }
                }
               
            }catch(Exception $e){
                echo 'Message: ' .$e->getMessage();
            } 
        }

        public function updateAppointmentInfo($appointmentObj){
            try {
                $appointmentFound = $this->findAppointmentById($appointmentObj->id);

                if($appointmentFound == null){
                    return "Appointment doesn't exist!";
                }
    
                $date = $appointmentFound->date;
                $time = $appointmentFound->time;
                
                if(property_exists($appointmentObj, 'date') && strcmp($appointmentObj->date, "") !== 0 && strcmp($date, $appointmentObj->date) !== 0){
                    $date = $appointmentObj->date;
                }

                if(property_exists($appointmentObj, 'time') && strcmp($appointmentObj->time, "") !== 0 && strcmp($time, $appointmentObj->time) !== 0){
                    $time = $appointmentObj->time;
                }
                

                $sql = "UPDATE `$this->table` SET `date` = '$date', `time` = '$time' WHERE `id` = $appointmentObj->id";

                $result = $this->mysqli->query($sql);
                
                return $this->findAppointmentById($appointmentFound->id);
    
            }catch(Exception $e){
                echo 'Message: ' .$e->getMessage();
            }
        }
    }
?>
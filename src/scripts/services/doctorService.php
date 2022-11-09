
<?php 
    
        
    class DoctorService {

        
        private $table;
        private $mysqliConnection;
        

        public function __construct($table, $mysqliConnection){
            $this->table = $table;
            $this->mysqli = $mysqli;
        }

        public function findDoctorById($id){
            $doctor = null;
            try {
                $sql = "SELECT * FROM `$this->table` WHERE `id` = $id";
                $result = $this->mysqli->query($sql);
                $row = $result->fetch_assoc();
                if($result->num_rows > 0){
                    $doctor = new Doctor($row["id"], $row["firstname"], $row["lastname"], $row["username"], $row["email"], $row["password"], $row["specialization"], $row["vat"], $row["location"], $row["image"], $this->mysqli);
                }
            }catch(Exception $error){
                echo 'Error Message: ' .$error->getMessage();
            } 
            return $doctor;
        }
    }

        


?>
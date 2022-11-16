<?php
// `id` int(11) NOT NULL,
// `doctor_id` int(11) NOT NULL,
// `patient_id` int(11) NOT NULL,
// `date` varchar(50) NOT NULL,
// `time` varchar(20) NOT NULL,
// `description` varchar(255) NOT NULL

class Appointment {

    public $id;
    public $doctor_id;
    public $patient_id;
    public $date;
    public $time;
    public $description;
    public $created;

   
    public function __construct($id, $doctor_id, $patient_id, $date, $time, $description, $created){
        $this->id = $id;
        $this->doctor_id = $doctor_id;
        $this->patient_id = $patient_id;
        $this->date = $date;
        $this->time = $time;
        $this->description = $description;
        $this->created = $created;
    }
};

?>
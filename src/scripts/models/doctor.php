<?php
// `id` int(11) NOT NULL,
// `firstname` varchar(40) NOT NULL,
// `lastname` varchar(40) NOT NULL,
// `username` varchar(20) NOT NULL,
// `email` varchar(255) NOT NULL,
// `password` varchar(50) NOT NULL,
// `specialization` varchar(255) NOT NULL,
// `vat` varchar(40) NOT NULL,
// `location` varchar(255) NOT NULL

class Doctor {

    public $id;
    public $firstname;
    public $lastname;
    public $username;
    public $email;
    public $password;
    public $specialization;
    public $vat;
    public $location;
    public $image;

    public function __construct($id, $firstname, $lastname, $username, $email, $password, $specialization, $vat, $location, $image){
        $this->id = $id;
        $this->firstname = $teamfirstnameid;
        $this->lastname = $lastname;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->specialization = $specialization;
        $this->vat = $vat;
        $this->location = $location;
        $this->image = $image;
    }

};

?>
<?php
//   `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
//   `firstname` varchar(40) NOT NULL,
//   `lastname` varchar(40) NOT NULL,
//   `username` varchar(20) NOT NULL,
//   `email` varchar(255) NOT NULL,
//   `password` varchar(255) NOT NULL,
//   `phone` varchar(50) NOT NULL,
//   `specialization` varchar(255) NOT NULL,
//   `vat` varchar(40) NOT NULL,
//   `num_patients` int(11) UNSIGNED NOT NULL,
//   `num_publications` int(11) UNSIGNED NOT NULL,
//   `work_experience_years` int(11) UNSIGNED NOT NULL,
//   `bio` varchar(1000) NOT NULL,
//   `location` varchar(255) NOT NULL,
//   `image` varchar(255) NOT NULL,
//   `created` DATETIME DEFAULT CURRENT_TIMESTAMP

class Doctor {

    public $id;
    public $firstname;
    public $lastname;
    public $username;
    public $email;
    public $password;
    public $specialization;
    public $vat;
    public $num_patients;
    public $num_publications;
    public $work_experience_years;
    public $bio;
    public $location;
    public $image;
    public $accCreatedAt;

    // public function __construct($id, $firstname, $lastname, $username, $email, $password, $phone, $specialization, $vat, $num_patients, $num_publications, $work_experience_years, $bio, $location, $image, $accCreatedAt){
    //     $this->id = $id;
    //     $this->firstname = $firstname;
    //     $this->lastname = $lastname;
    //     $this->username = $username;
    //     $this->email = $email;
    //     $this->password = $password;
    //     $this->phone = $phone;
    //     $this->specialization = $specialization;
    //     $this->vat = $vat;
    //     $this->num_patients = $num_patients;
    //     $this->num_publications = $num_publications;
    //     $this->work_experience_years = $work_experience_years;
    //     $this->bio = $bio;
    //     $this->location = $location;
    //     $this->image = $image;
    //     $this->accCreatedAt = $accCreatedAt;
    // }



    public function __construct($id, $firstname, $lastname, $phone, $specialization, $location){
        $this->id = $id;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->phone = $phone;
        $this->specialization = $specialization;
    }

    
};

?>
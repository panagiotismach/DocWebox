<?php
// `id` int(11) NOT NULL,
// `firstname` varchar(40) NOT NULL,
// `lastname` varchar(40) NOT NULL,
// `username` varchar(20) NOT NULL,
// `email` varchar(255) NOT NULL,
// `password` varchar(50) NOT NULL,
// `phone` varchar(50) NOT NULL,
// `image` varchar(255) NOT NULL

class Patient {

    public $id;
    public $firstname;
    public $lastname;
    public $username;
    public $email;
    public $password;
    public $phone;
    public $image;

    public function __construct($id, $firstname, $lastname, $username, $email, $password, $phone, $image){
        $this->id = $id;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->phone = $phone;
        $this->image = $image;
    }

};

?>
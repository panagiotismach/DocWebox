<?php
// `id` int(11) NOT NULL,
// `username` varchar(20) NOT NULL,
// `password` varchar(40) NOT NULL

class Admin {

    public $id;
    public $username;
    public $password;

    public function __construct($id, $username, $password){
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
    }

};

?>
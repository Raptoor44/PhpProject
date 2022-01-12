<?php

class InstituteUser{

    private $username; //String
    private $lastname; //String
    private $firstname; //String
    private $email; //String   
    private $isAdmin; //boolean
    private $id; //long

    public function __construct($username,$lastname,$firstname,$email,$isAdmin,$id){
        $this->username=$username;
        $this->lastname=$lastname;
        $this->firstname=$firstname;
        $this->email=$firstname;
        $this->isAdmin=$isAdmin;
        $this->id=$id;
    }
}



?>
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
    public function getId(){
        return $this->id;
        
    }
    public function getUsername(){
        return $this->username;
        
    }
    public function getlastname(){
        return $this->lastname;
        
    }
    public function getFirstname(){
        return $this->firstname;
        
    }
    public function getEmail(){
        return $this->email;
        
    }
}



?>
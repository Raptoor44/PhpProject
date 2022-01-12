<?php

abstract class Role{
    private $id; //Long
    private $name; //String

    public function __construct($nomval){

    }
    public function getId(){
        return $this->id;
        
    }
    public function getName(){
        return $this->name;
        
    }

}

?>
<?php

abstract class Role{
    private $id; //Long
    private $name; //String

    public function __construct($nomval){

        $this->id = $id;
        $this->name = $name;
    }

    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }



}

?>

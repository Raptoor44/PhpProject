<?php

class PromotionGroup{

    private $name; //String
    private $id; //long


    public function __construct($name,$id){
        $this->name=$name;
        $this->id=$id;

    }

    public function getId(){
        return $this->id;
        
    }
    public function getName(){
        return $this->name;
        
    }
}

?>
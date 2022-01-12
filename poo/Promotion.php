<?php

class Promotion{

    private $name;//String
    private $id; //long
    private $semesterSeparation; //ZonedDateTime

    public function __construct($name,$id,$semesterSeparation){
        $this->name=$name;
        $this->id=$id;
        $this->semesterSeparation=$semesterSeparation;
    }

    public function getId(){
        return $this->id;
        
    }
    public function getName(){
        return $this->name;
        
    }
    public function getSemesterSeparation(){
        return $this->semesterSeparation;
        
    }
}

?>
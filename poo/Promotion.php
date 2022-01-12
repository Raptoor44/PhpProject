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
}

?>
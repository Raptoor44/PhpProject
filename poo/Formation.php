<?php

class Formation{

    private $name; //String
    private $id; //long
    private $scholarYear; //int

    public function __construct($name,$id,$scholarYear){
        $this->name = $name;
        $this->id = $id;
        $this->scholarYear = $scholarYear;
    }
}

?>
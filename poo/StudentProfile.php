<?php


class StudentProfile{

    private $studentNumber; //String
    private $dateofBirth; //Date
    private $repeating; //boolean
    private $resigning; //boolean
    private $picture; //Array<byte>
    private $id; //long

    public function __construct($nomval){

        $this->studentNumber = $studentNumber;
        $this->dateofBirth = $dateofBirthr;
        $this->repeating = $repeating;
        $this->resigning = $resigning;
        $this->picture = $picture;
        $this->id = $id;
    }

    public function underage(){


    }

    public function getStudentNUmber(){
        return $this->studentNumber;
    }

    public function getDateofBirth(){
        return $this->dateofBirth;
    }

    public function isRepeating(){
        return $this->repeating;
    }

    public function isResigning(){
        return $this->resigning;
    }

    public function getPicture(){
        return $this->picture;
    }

    public function getId(){
        return $this->id ;
    }


    


}

?>

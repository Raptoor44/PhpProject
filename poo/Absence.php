<?php   


class Absence{

private $absenceDate; //Date
private $lateTime; //int
private $excused; //boolean
private $id; //long
private $courseType; //String enum
private $courseDurationMinutes; //int  enum
private $comment; // Comment
private $student; //Student


public function __construct($absenceDate, $lateTime, $excused, $courseType, $courseDurationMinutes,$id,$comment,$student){

    $this->absenceDate = $absenceDate;
    $this->lateTime = $lateTime;
    $this->excused = $excused;
    $this->courseType = $courseType;
    $this->courseDurationMinutes = $courseDurationMinutes;
    $this->id = $id;
    $this->comment = $comment;
    $this->student = $student;
}

public function getAbsenceDate(){
    return $this->absenceDate;

}
public function getLateTime(){
    return $this->lateTime;
    
}
public function isExcused(){
    return $this->excused;
    
}
public function getCourseType(){
    return $this->courseType;
}
public function getCourseDurationMinutes(){
    return $this->courseDurationMinutes;
}
public function getComment(){
    return $this->comment;
    
}
public function getStudent(){
    return $this->student;
    
}

public function setComment($comment){
     $this->comment = $comment;
}

}
?>
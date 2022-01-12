<?php   


class Absence{

private $absenceDate; //Date
private $lateTime; //int
private $excused; //boolean
private $id; //long
private $courseType; //String
private $courseDurationMinutes; //int
private $comment ; // Comment


public function __construct($absenceDate, $lateTime, $excused, $courseType, $courseDurationMinutes,$id,$comment){

    $this->absenceDate = $absenceDate;
    $this->lateTime = $lateTime;
    $this->excused = $excused;
    $this->courseType = $courseType;
    $this->courseDurationMinutes = $courseDurationMinutes;
    $this->id = $id;
    $this->comment = $comment;
}

public function _getAbsenceDate(){
    return $this->absenceDate;

}
public function _getLateTime(){
    return $this->lateTime;
    
}
public function _isExcused(){
    return $this->excused;
    
}
public function _getCourseType(){
    return $this->courseType;
}
public function _getCourseDurationMinutes(){
    return $this->courseDurationMinutes;
}
public function _getComment(){
    return $this->comment;
    
}

public function _setComment($comment){
     $this->comment = $comment;
}

}
?>
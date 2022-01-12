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

    $this->$absenceDate = $absenceDate;
    $this->$lateTime = $lateTime;
    $this->$excused = $excused;
    $this->$courseType = $courseType;
    $this->$courseDurationMinutes = $courseDurationMinutes;
    $this->$id = $id;
    $this->$comment = $comment;
}

public function _getAbsenceDate(){

}
public function _getLateTime(){
    
}
public function _isExcused(){
    
}
public function _getCourseType(){
    
}
public function _getCourseDurationMinutes(){
    
}
public function _getComment(){
    
}




}
?>
<?php   


class Absence{

private $absenceDate; //Date
private $lateTime; //int
private $excused; //boolean
private $id; //long
private $courseType; //String
private $courseDurationMinutes; //int


public function __construct($absenceDate, $lateTime, $excused, $courseType, $courseDurationMinutes){

    $this->$absenceDate = $absenceDate;
    $this->$lateTime = $lateTime;
    $this->$excused = $excused;
    $this->$courseType = $courseType;
    $this->$courseDurationMinutes = $courseDurationMinutes;
}





}
?>
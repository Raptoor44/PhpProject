<?php 
class MailTemplate{

    private $id ; //long
    private $subjectContent; //String
    private $bodyStartContent;//String
    private $bodyEndContent; //string

    public function __construct($id,$subjectContent,$bodyStartContent,$bodyEndContent){
        $this->id=$id;
        $this->subjectContent=$subjectContent;
        $this->bodyStartContent=$bodyStartContent;
        $this->bodyEndContent=$bodyEndContent;

    }
    public function getId(){
        return $this->id;
        
    }
    public function getSubjectContent(){
        return $this->subjectContent;
        
    }
    public function getBodyStartContent(){
        return $this->bodyStartContent;
        
    }
    public function getBodyEndContent(){
        return $this->bodyEndContent;
        
    }



}
?>
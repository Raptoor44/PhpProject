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



}
?>
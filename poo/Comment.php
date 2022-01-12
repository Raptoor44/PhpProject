<?php


class Comment{

    private $content; //string
    private $creationTime; //Date
    private $editTime; //Date
    private $id; //long

    public function __construct($content, $creationTime, $editTime,$id){
        $this->$content = $content;
        $this->$creationTime = $creationTime;
        $this->$editTime = $editTime;
        $this->$id = $id;

    }
    public function getId(){
        return $this->id;
        
    }
    public function getEditTime(){
        return $this->editTime;
        
    }
    public function getCreationTime(){
        return $this->creationTime;
        
    }
    public function getContent(){
        return $this->content;
        
    }


}


?>
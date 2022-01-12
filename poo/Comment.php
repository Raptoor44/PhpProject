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
}


?>
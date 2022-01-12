<?php

class CertificateProof{
    
    private $id; //long
    private $content; // Array<Byte>
    private $name; //String
    
    public function __construct($id,$content,$name){
         $this->id=$id;
         $this->content=$content;
         $this->name=$name;

    }
    public function getName(){
        return $this->name;
        
    }
    public function getId(){
        return $this->id;
        
    }
    public function getContent(){
        return $this->content;
    }

}

?>
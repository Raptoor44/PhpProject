<?php
    class AbsenceCertificate{
        private $startTime; //Date
        private $endTime; //Date
        private $reason; //string
        private $id; //long

        public function __construct($startTime,$endTime,$reason,$id){
             $this->startTime = $startTime;
             $this->endTime = $endTime;
             $this->reason = $reason;
             $this->id = $id;

        }

        public function getStartTime(){
            return $this->startTime;
            
        }
        public function getEndTime(){
            return $this->endTime;
            
        }
        public function getReason(){
            return $this->reason;
            
        }
        public function getId(){
            return $this->id;
            
        }

        public function proofsCount($CertificateProof){
           return $CertificateProof->getContent()->ob_get_length;
        }
    } 
?>
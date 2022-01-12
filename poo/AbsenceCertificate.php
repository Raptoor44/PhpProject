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

        public function proofsCount($CertificateProof){
           return $CertificateProof->getContent();

        }
    } 


?>
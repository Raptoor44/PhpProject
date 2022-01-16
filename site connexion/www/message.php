<?php

class Message
{

    private $Nom;
    private $Prenom;
    private $Message;

    /**
     * @param $username
     * @param $password
     */
    public function __construct($Nom, $Prenom, $Message)
    {
        $this->Nom = $Nom;
        $this->Prenom = $Prenom;
        $this->Message = $Message;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->Nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->Prenom;
    }

    public function getMessage()
    {
        return $this->Message;
    }
}

?>
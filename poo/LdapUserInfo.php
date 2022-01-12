<?php
class LdapUserInfo{

    private $lastLdapUpdate; //Date
    private $manuallyUpdated; //boolean
    private $ldapSynchronized; //boolean

    public function __construct($lastLdapUpdate,$manuallyUpdated,$ldapSynchronized){ 
        $this->lastLdapUpdate=$ldapSynchronized;
        $this->manuallyUpdated=$manuallyUpdated;
        $this->ldapSynchronized=$ldapSynchronized;


    }

    public function getLastLdapUpdate(){
        return $this->lastLdapUpdate;
    }

    public function getManuallyUpdated(){
        return $this->manuallyUpdated;
    }

    public function getLdapSynchronized(){
        return $this->ldapSynchronized;
    }

}
?>
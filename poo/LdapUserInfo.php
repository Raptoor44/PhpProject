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

}
?>
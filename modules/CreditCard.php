<?php
require_once __DIR__ . '/Date.php';

class CreditCard{

    protected $pan;
    protected $expDate;
    protected $ownerFullName;

    public function __construct($pan,Date $d, $ownerFullName)
    {
        $this->setPan($pan);
        $this->expDate=$d;
        $this->setOwnerFullName($ownerFullName);
    }

    //?getter

    public function getPan(){
        return $this->pan;
    }
    public function getExpDate(){
        return $this->expDate;
    }
    public function getOwnerFullName(){
        return $this->ownerFullName;
    }

    //?setter

    protected function setPan($pan)
    {
        if(strlen($pan)<12) throw new Exception('pan non valido');
        elseif(!is_numeric($pan)) throw new Exception('pan non numerico');
        else{
            $this->pan=$pan;
        }
    }
    protected function setOwnerFullName($fullname)
    {
        if(strlen($fullname)<2) throw new Exception('fullname non valido');
        elseif(is_numeric($fullname)) throw new Exception('fullname è numerico');
        else{
            $this->ownerFullName=$fullname;
        }
    }
}
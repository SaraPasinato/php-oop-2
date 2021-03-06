<?php
require_once __DIR__ . '/User.php';
require_once __DIR__ . '/Date.php';
require_once __DIR__ . '/Address.php';
require_once __DIR__ . '/CreditCard.php';



class Customer extends User {

     protected $name;
     protected $surname;
     protected $day_birth;
     protected $address;
     protected $card;

    public function  __construct($_username,$_email,$_password,$_name,$_surname,Date $d ,Address $addr,CreditCard $card)
    {
        
        parent::__construct($_username, $_email, $_password);
        $this->setName($_name);
        $this->setSurname($_surname);
        //date 
        $this->day_birth=$d;
        //address
        $this->address=$addr;
        //Credit Card
        $this->card=$card;
    }

     /*//? getter */
     public function getName(){
        return $this->name;
    }
     public function getSurname(){
        return $this->surname;
    }

    /* //? setter */
    protected function setName($_name){
        if (is_numeric($_name)) {
            throw new Exception('hai inserito un valore numerico');
        }else if(strlen($_name)<3){
            throw new Exception(('hai inserito meno di 3 caratteri'));
        }else{
            $this->name=$_name;
        }
    }
    protected function setSurname($_surname){
        if (is_numeric($_surname)) {
            throw new Exception('hai inserito un valore numerico');
        }else if(strlen($_surname)<3){
            throw new Exception(('hai inserito meno di 3 caratteri'));
        }else{
            $this->surname=$_surname;
        }
    }
 
    public function __toString()
    {
        return "<br/><strong>Cliente </strong> <br/> Nome:   $this->name $this->surname \n ";
    }
 
}


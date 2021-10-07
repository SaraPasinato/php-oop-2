<?php
require_once __DIR__ . '/User.php';
require_once __DIR__ . '/Date.php';
require_once __DIR__ . '/Address.php';



class Customer extends User {

     protected $name;
     protected $surname;
     protected $day_birth;
     protected $address;

    public function  __construct($_username,$_email,$_password,$_name,$_surname,Date $d ,Address $addr)
    {
        
        parent::__construct($_username, $_email, $_password);
        $this->setName($_name);
        $this->setSurname($_surname);
        //date 
        $this->day_birth=$d;
        //address
        $this->address=$addr;
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
 
   
 
}

//inline debug Data
$dC1=new Date(2,10,2022);
//inline debug Address
$addr=new Address('via Verdi',4,'Milano','20019');

//inline debug Customer
$c1= new Customer('saraPasi','pinco@pango.da','pancopinco','Sara','Pasinato',$dC1,$addr);

var_dump($c1);

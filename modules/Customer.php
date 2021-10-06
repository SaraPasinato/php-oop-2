<?php
require_once __DIR__ . '/User.php';
require_once __DIR__ . '/Date.php';


class Customer extends User{
    
     protected $name;
     protected $surname;
    // protected Date $day_birth;

    public function  __construct($_username,$_email,$_password,$_name,$_surname,$day_birth)
    {
        parent::__construct($_username, $_email, $_password);
        $this->setName($_name);
        $this->setSurname($_surname);
       /*  Insert */
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


$c1= new Customer('saraPasi','pinco@pango.da','pancopinco','Sara','Pasinato',1,2,2021);
var_dump($c1);
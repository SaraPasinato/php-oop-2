<?php
require_once __DIR__ . '/User.php';
require_once __DIR__ . '/Date.php';
require_once __DIR__ . '/Address.php';
require_once __DIR__ . '/CreditCard.php';



class Retailer extends User {

     protected $name;
     protected $surname;
     protected $fiscal_id;
     protected $day_birth;
     protected $address;
     protected $card;

    public function  __construct($_username,$_email,$_password,$_name,$_surname,$f_id,Date $d ,Address $addr,CreditCard $card)
    {
        
        parent::__construct($_username, $_email, $_password);
        $this->setName($_name);
        $this->setSurname($_surname);
        $this->setFiscalId($f_id);
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
     public function getFiscal_id(){
        return $this->fiscal_id;
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
    protected function setFiscalId($f){
        if (!is_numeric($f)) {
            throw new Exception('hai inserito un valore  non numerico');
        }else if(strlen($f)<11){
            throw new Exception(('hai inserito meno di 11 cifre'));
        }else{
            $this->fiscal_id=$f;
        }
    }
 
    public function __toString()
    {
        return "<strong> Venditore </strong> <br/> Nome:   $this->name $this->surname \n ";
    }
 
}

//inline debug Data
$dR1=new Date(2,10,2022);
//inline debug Address
$addr=new Address('via Verdi',4,'Milano','20019');

//inline debug CreditCard
$cc=new CreditCard('123456789123',$dR1,'MicheleRossi');

//inline debug Retailer
$r1= new Retailer('marketShop','shop@id.it','pancopinco','pinco','panco',12345678912,$dR1,$addr,$cc);

//var_dump($r1);

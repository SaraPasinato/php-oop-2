<?php

class Address{
    //?attributes
    protected $street;
    protected $n;
    protected $city;
    protected $code;
    protected $opt;

    public function __construct($street,$nr,$city,$p_code,$opt='nessuna')
    {
        $this->setStreet($street);
        $this->setCity($city);
        $this->setOpt($opt);
        $this->setNr($nr);
        $this->setCode($p_code);
    }
    /*//? Getter */
    public function getStreet()
    {
        return $this->street;
    }
    public function getN()
    {
        return $this->n;
    }
    public function getCity()
    {
        return $this->city;
    }
    public function getCode()
    {
        return $this->code;
    }
    public function getOpt()
    {
        return $this->opt;
    }
   
    //?Setter
    protected function setStreet($street){
        if(is_numeric($street)){
            throw new Exception('hai inserito un valore numerico');
        }elseif (strlen(trim($street))<=0){
            throw new Exception('non hai inserito la strada');
        }else{
            $this->street=$street;
        }  
    }
    protected function setCity($city){
        if(is_numeric($city)){
            throw new Exception('hai inserito un valore numerico');
        }elseif (strlen(trim($city))<=0){
            throw new Exception('non hai inserito la città');
        }else{
            $this->city=$city;
        }  
    }
    protected function setOpt($opt){
            $this->opt=$opt;
        } 
    protected function setNr($nr){
       if(strlen($nr)<0){
           throw new Exception('il civico non è stato inserito');
       }else{
           $this->n=$nr;
        }
     } 
    protected function setCode($p_code){

       if(strlen($p_code)<5){
           throw new Exception('il codice postale  non è valido');
         }elseif (!is_numeric($p_code)){
           throw new Exception('il codice postale non è valido');
         }else{
           $this->code=$p_code;
        }
      } 

    }
 




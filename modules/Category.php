<?php

class  Category{

    private $cod;
    private $name;

    public function __construct($cod,$name)
    {
        $this->setCode($cod);
        $this->setName($name);
    }

    public function getCode(){
        return $this->code;
    }
    public function getName(){
        return $this->name;
    }

    private function setCode($code){

        if ($code<0 || $code>5 || !is_numeric($code)) {
            throw new Exception( ' codice categoria  non valido');
        }else{
            $this->cod=$code;
        }
    }
    private function setName($name){

        if (is_numeric($name)) {
            throw new Exception( ' nome categoria  non valido');
        }else{
            $this->name=$name;
        }
    }
}
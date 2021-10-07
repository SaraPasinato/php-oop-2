<?php
require_once __DIR__ . '/Category.php';

class Product{

    protected $title;
    protected $desc;
    protected $prize;
    protected $category;

    public function __construct($title,$desc,$prize,Category $category)
    {
        $this->setTitle($title);
        $this->setDesc($desc);
        $this->setPrize($prize);
        $this->category= $category;
    }

    public function getTitle(){
        return $this->title;
    }
    public function getDesc(){
        return $this->desc;
    }
    public function getPrize(){
        return $this->prize;
    }

    public function setTitle($title){
        if(strlen($title)>100){
            throw new Exception('Titolo troppo esteso');
        }else{
            $this->title=$title;
        }
    }
    public function setDesc($desc){
        if(strlen($desc)>500){
            throw new Exception('Descrizione troppo estesa');
        }else{
            $this->desc=$desc;
        }
    }
    public function setPrize($prz){
        if($prz<0){
            throw new Exception('prezzo non valido');
        }else{
            $this->prize=$prz;
        }
    }
    
}

//inline debug
$prod1= new Product('libro','parla di cose',12.30,new Category('1','Libri'));

var_dump($prod1);
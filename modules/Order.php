<?php

require_once __DIR__ . '/Customer.php';
require_once __DIR__ . '/Retailer.php';
require_once __DIR__ . '/ProductList.php';


class Order {
   
    protected $list;
    protected $client;
    protected $retailer;


    public function __construct(Customer $client,Retailer $retailer,ProductList $list){
        $this->client=$client;
        $this->retailer=$retailer;
        $this->list=$list;
    }

   public function __toString()
   {
       return  "$this->list <br/>  $this->client <br/> $this->retailer ";
   }  


}

$prod2= new Product('Libro','parla di cose',12.30,new Category('1','Libri'));

$list= new ProductList($prod2,2,10);

$o1=new Order($c1,$r1,$list);

echo $o1;
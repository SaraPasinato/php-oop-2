<?php

require_once __DIR__ . '/Product.php';

Class ProductList{
  protected $product;
  protected $qta;
  protected $discount;

  public function __construct(Product $product,$qta,$discount=0){
    $this->product= $product;
    $this->setQta($qta);
    $this->setDiscount($discount);
  }

  public function getQta(){
      return $this->qta;
  }
  public function getDiscount(){
      return $this->discount;
  }

  private function setQta($qta){
        if($qta<0 || $qta>70) throw new Exception('quantita non valida ');
        else{
            $this->qta=$qta;
        }
  }
  private function setDiscount($disc){
        if($disc<0 || $disc>70) throw new Exception('sconto non valido ');
        else{
            $this->discount=$disc;
        }
  }

  public function renderList(){
    return " Qtà: $this->qta \n Discount: $this->discount\n";
  }

  public function  renderListProduct(){

    return $this->product->renderProduct() . "\n Qta : $this->qta \n Sconto: $this->discount";
     
  }

}

/* 
$prod2= new Product('Libro','parla di cose',12.30,new Category('1','Libri'));

$list= new ProductList($prod2,2,10);

var_dump($list->renderListProduct()); */


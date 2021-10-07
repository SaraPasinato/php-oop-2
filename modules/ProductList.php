<?php

require_once __DIR__ . '/Product.php';

Class ProductList{
  protected $product;
  protected $qta;
  protected $discount;
  protected $amount;

  public function __construct(Product $product,$qta,$discount=0){
    $this->product= $product;
    $this->setQta($qta);
    $this->setDiscount($discount);
    $this->amount=$this->setAmount($product,$qta,$discount);
  }

  public function getQta(){
      return $this->qta;
  }
  public function getDiscount(){
      return $this->discount;
  }
  public function getProduct(){
      return $this->product;
  }
  public function getAmount(){
      return $this->amount;
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
  private function setAmount($prod,$qta,$discount){
      $tot=$prod->getPrize()*$qta;
      return $tot - (($tot*$discount)/100);   
  }

  public function renderList(){
    return " Qtà: $this->qta \n Discount: $this->discount\n";
  }

  public function  renderListProduct(){

    return $this->product->renderProduct() . "   Qta : $this->qta <br/>   Sconto: $this->discount% | Tot: $this->amount €";
     
  }

  public function __toString()
  {
      return $this->renderListProduct();
  }
}



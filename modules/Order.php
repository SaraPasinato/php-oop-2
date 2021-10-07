<?php

require_once __DIR__ . '/Customer.php';
require_once __DIR__ . '/Retailer.php';


class Order {
    use ProductList;

    protected $client;
    protected $retailer;
    protected $amount;

    public function __construct(Customer $client,Retailer $retailer){
        $this->client=$client;
        $this->retailer=$retailer;

    }

}
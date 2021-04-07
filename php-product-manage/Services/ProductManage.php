<?php
namespace Services;
class ProductManage{
    private $products;
    public function __construct()
    {
        $this->products = [];
    }
    public function add($product){
        $this->products[] = $product;
    }

    public function getProducts(): array
    {
        return $this->products;
    }
}
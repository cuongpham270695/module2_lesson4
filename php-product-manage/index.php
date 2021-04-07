<?php
include_once "Models/product.php";
include_once "Services/ProductManage.php";
use Services\ProductManage;
use Models\product;
$product_manager = new ProductManage();
$product_manager -> add(new product("Laptop"));
$product_manager -> add(new product("Mobile"));
$products= $product_manager->getProducts();
foreach ($products as $product){
    echo $product->getName()."<br>";
}
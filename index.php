<?php
include __DIR__ . '/product.php';

$product1 = new Product();
$product1->setName("crocchette");
$product1->setCategory("cane");
$product1->setPrice(15);
$product1->setBrand("Monge");

var_dump($product1);

?>
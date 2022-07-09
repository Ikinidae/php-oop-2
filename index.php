<?php
include __DIR__ . '/classes/product.php';
include __DIR__ . '/classes/food.php';
include __DIR__ . '/classes/toy.php';
include __DIR__ . '/classes/doghouse.php';
include __DIR__ . '/classes/user.php';

$food1 = new Food();
$food1->setCategory("cane");
$food1->setPrice(50);
$food1->setBrand("Monge");
$food1->setSize(12);
$food1->setType("secco");
var_dump($food1);

$toy1 = new Toy();
$toy1->setCategory("cane");
$toy1->setPrice(5);
$toy1->setBrand("Eukanuba");
$toy1->setName("pallina");
var_dump($toy1);

$dog_house1 = new DogHouse();
$dog_house1->setCategory("gatto");
$dog_house1->setPrice(20);
$dog_house1->setBrand("Eukanuba");
$dog_house1->setName("cuccia");
$dog_house1->setDimensions(300);
var_dump($dog_house1);

$user1 = new User();
$user1->setName("Federica");
$user1->setSurname("Elia");
$user1->setPhone(3393035934);
$user1->setAddress("Via Quercia 87/A");
var_dump($user1);

?>
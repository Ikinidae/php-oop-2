<?php
class Product {
    private $name;
    private $category; // per quale animale
    private $price;
    private $brand;

    // setters
    public function setName($name) {
        if (is_string($name)) {
            $this->name = $name;
        }
    }

    public function setCategory($category) {
        if (is_string($category)) {
            $this->category = $category;
        }
    }

    public function setPrice($price) {
        if (!is_string($price)) {
            $this->price = $price;
        }
    }

    public function setBrand($brand) {
        if (is_string($brand)) {
            $this->brand = $brand;
        }
    }
}
<?php
class Product {
    private $category; // per quale animale
    private $price;
    private $brand;

    // setters
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
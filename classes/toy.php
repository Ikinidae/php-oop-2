<?php

class Toy extends Product {
    private $name;

    // setters
    public function setName($name) {
        if (is_string($name)) {
            $this->name = $name;
        }
    }
}
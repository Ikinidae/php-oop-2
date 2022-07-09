<?php

class Toy extends Product {
    private $name;

    public function setName($name) {
        if (is_string($name)) {
            $this->name = $name;
        }
    }
}
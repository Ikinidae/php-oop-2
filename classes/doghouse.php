<?php

class DogHouse extends Product {
    private $name;
    private $dimensions;

    public function setName($name) {
        if (is_string($name)) {
            $this->name = $name;
        }
    }

    public function setDimensions($dimensions) {
        if (!is_string($dimensions)) {
            $this->dimensions = $dimensions;
        }
    }
}
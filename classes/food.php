<?php

class Food extends Product {
    private $size; // sacco da quanti kg
    private $type; // umido o secco

    public function setSize($size) {
        if (!is_string($size)) {
            $this->size = $size;
        }
    }

    public function setType($type) {
        if (is_string($type)) {
            $this->type = $type;
        }
    }
}
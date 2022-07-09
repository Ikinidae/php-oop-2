<?php
class User {
    private $name;
    private $surname;
    private $phone;
    private $address;
    // private int $credit_card;
    // private string $credit_card_expiration_date;
    // private string $message_card = '';
    // public int $discount = 0;

    public function setName($name) {
        if (is_string($name)) {
            $this->name = $name;
        }
    }

    public function setSurname($surname) {
        if (is_string($surname)) {
            $this->surname = $surname;
        }
    }

    public function setPhone($phone) {
        if (!is_string($phone)) {
            $this->phone = $phone;
        }
    }

    public function setAddress($address) {
        if (is_string($address)) {
            $this->address = $address;
        }
    }
}
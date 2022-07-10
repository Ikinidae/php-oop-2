<?php
class User {
    private $name;
    private $surname;
    private $phone;
    private $address;
    private $registered;
    private $discount;
    // private int $credit_card;
    // private string $credit_card_expiration_date;
    // private string $message_card = '';
    // public int $discount = 0;

    // setters
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

    public function setRegistered($registered) {
        if (is_bool($registered)) {
            $this->registered = $registered;
        }
        if ($this->registered == true) {
            $this->discount = 20;
        } else {
            $this->discount = 0;
        }
    }
}
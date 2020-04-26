<?php
//objet metier - entities
class Product {
    private $pk;
    private $name;
    private $price;
    private $vat;
    private $price_vat;
    private $price_total;
    private $quantity;

    function __construct($pk, $name, $price, $vat, $quantity) {
        $this->pk = $pk;
        $this->name = $name;
        $this->price = $price;
        $this->vat = $vat;
        $this->price_vat = $this->price * ($this->vat / 100);
        $this->price_total = $this->price + $this->price_vat;
        $this->quantity = $quantity;
    }

    function __get($property) {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    function __set($property, $value) {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
    }
}

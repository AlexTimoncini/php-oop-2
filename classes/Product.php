<?php

class Product{
    public $product;
    public $price;
    public $image;
    public $category;
    public $quantity;

    function __construct( String $product, String $price, String $image, Category $category, Int $quantity){
        $this->product = $product;
        $this->price = $price;
        $this->image = $image;
        $this->category = $category;
        $this->quantity = $quantity;
    }

    public function checkAvailability(){
        if($this->quantity > 0){
            return true;
        }
        return false;
    }
}
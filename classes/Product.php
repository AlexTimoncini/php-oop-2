<?php

class Product{
    public $product;
    public $price;
    public $image;
    public $category;

    function __construct( String $product, String $price, String $image, Category $category){
        $this->product = $product;
        $this->price = $price;
        $this->image = $image;
        $this->category = $category;
    }

    public function getSynopsis(Int $length){
        return substr($this->content, 0, $length);
    }
}
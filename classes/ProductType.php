<?php
include_once __DIR__ . '/../classes/Product.php';
class ProductType extends Product{
    public $type;
    public $avaibleFrom;

    function __construct( String $product, String $price, String $image, Category $category, String $type, DateTime $avaibleFrom){
        parent::__construct($product, $price, $image, $category);
        $this->type = $type;
        $this->avaibleFrom = $avaibleFrom;
    }

    public function getSynopsis(Int $length){
        return substr($this->content, 0, $length);
    }
}
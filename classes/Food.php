<?php
include_once __DIR__ . '/../classes/Product.php';
include_once __DIR__ . '/../classes/PositionTrait.php';
class Food extends Product{
    use MagazinePosition;
    public $type;
    public $expiryDate;

    function __construct( String $product, String $price, String $image, Category $category, Int $quantity, String $type, String $magazine, String $room, String $box, DateTime $expiryDate){
        parent::__construct($product, $price, $image, $category, $quantity);
        $this->type = $type;
        $this->magazine = $magazine;
        $this->room = $room;
        $this->box = $box;
        $this->expiryDate = $expiryDate;
    }
}
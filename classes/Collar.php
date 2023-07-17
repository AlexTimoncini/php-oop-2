<?php
include_once __DIR__ . '/../classes/Product.php';
include_once __DIR__ . '/../classes/PositionTrait.php';
class Collar extends Product{
    use MagazinePosition;
    public $type;
    public $size;

    function __construct( String $product, String $price, String $image, Category $category, Int $quantity, String $type, String $magazine, String $room, String $box, String $size){
        parent::__construct($product, $price, $image, $category, $quantity);
        $this->type = $type;
        $this->magazine = $magazine;
        $this->room = $room;
        $this->box = $box;
        $this->size = $size;
    }
}
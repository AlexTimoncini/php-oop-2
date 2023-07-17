<?php
include_once __DIR__ . '/../classes/Product.php';
include_once __DIR__ . '/../classes/PositionTrait.php';
class Kennel extends Product{
    use MagazinePosition;
    public $type;
    public $material;

    function __construct( String $product, String $price, String $image, Category $category, Int $quantity, String $type, String $magazine, String $room, String $box, String $material){
        parent::__construct($product, $price, $image, $category, $quantity);
        $this->type = $type;
        $this->magazine = $magazine;
        $this->room = $room;
        $this->box = $box;
        $this->material = $material;
    }
}
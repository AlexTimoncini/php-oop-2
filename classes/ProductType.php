<?php
include_once __DIR__ . '/../classes/Product.php';
include_once __DIR__ . '/../classes/PositionTrait.php';
class ProductType extends Product{
    use MagazinePosition;
    public $type;
    public $quantity;

    function __construct( String $product, String $price, String $image, Category $category, String $type, Int $quantity, String $magazine, String $room, String $box,){
        parent::__construct($product, $price, $image, $category);
        $this->type = $type;
        $this->quantity = $quantity;
        $this->magazine = $magazine;
        $this->room = $room;
        $this->box = $box;
    }

    public function checkAvailability(){
        if($this->quantity > 0){
            return true;
        }
        return false;

    }
}
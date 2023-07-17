<?php
include_once __DIR__ . '/../classes/Product.php';
include_once __DIR__ . '/../classes/PositionTrait.php';
class ProductType extends Product{
    use MagazinePosition;
    public $type;
    public $avaibleFrom;

    function __construct( String $product, String $price, String $image, Category $category, String $type, DateTime $avaibleFrom, String $magazine, String $room, String $box,){
        parent::__construct($product, $price, $image, $category);
        $this->type = $type;
        $this->avaibleFrom = $avaibleFrom;
        $this->magazine = $magazine;
        $this->room = $room;
        $this->box = $box;
    }

    public function checkAvailability(){
        if(new DateTime() >= $this->avaibleFrom){
            return true;
        }
        return false;

    }
}
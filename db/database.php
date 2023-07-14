<?php
include_once __DIR__ . '/../classes/Category.php';
include_once __DIR__ . '/../classes/Product.php';

$categories = [
    new Category('Cats'),
    new Category('Dogs'),
];



$products = [
    new Product('Crocchette per cani', '35€/kg','', new Category('Dogs'))
];


?>

<?php
include_once __DIR__ . '/../classes/Category.php';
include_once __DIR__ . '/../classes/Food.php';
include_once __DIR__ . '/../classes/Collar.php';
include_once __DIR__ . '/../classes/Kennel.php';

$dogCategory = new Category('Cani');
$catCategory = new Category('Gatti');

$products = [
    new Food('Crocchette per cani', '35€/kg','https://arcaplanet.vtexassets.com/arquivos/ids/226747/trainer-natural-sensitive-cane-no-gluten-adult-mini-anatra.jpg?v=1775348274', $dogCategory, 0,'Cibo per Cani', 'A1','C73','D4', new DateTime('01/01/2025')),
    new Food('Crocchette per Gatti', '55€/kg','https://static.zoomalia.com/prod_img/39988/lm_305496e05e1aea0a9c4655800e8a7b9ea281669993809.jpg', $catCategory, 15,'Cibo per Gatti', 'A1','B2','A4', new DateTime('02/15/2024')),
    new Collar('Collare per cane di piccola taglia', '15€','https://m.media-amazon.com/images/I/71E0rxzhvbL.jpg', $dogCategory, 10,'Collare per cani', 'R4','A2','F4','Piccola Taglia (<20kg)'),
    new Collar('Sonaglio per gatti', '3€','https://www.epocaitalpigeon.com/11056-large_default/sonaglio-in-ottone-lucido-da-17-mm-per-cani-gatti-e-altri-amimali.jpg', $catCategory, 5,'Collare per gatti', 'R4','A12','A3','Adattabile a tutti'),
    new Food('Osso Dentasan', '2€/pz','https://m.media-amazon.com/images/I/61J+8ov8FBL._AC_UF894,1000_QL80_.jpg', $dogCategory, 0,'Snack per cani', 'A1','B73','A4', new DateTime('03/12/2026')),
    new Kennel('Tiragraffi', '70€','https://m.media-amazon.com/images/I/710wXOnm2yL._AC_UF894,1000_QL80_.jpg', $catCategory, 1,'Cucce per gatti/Tiragraffi', 'F1','D3','A2','100% Cotone'),
];



?>

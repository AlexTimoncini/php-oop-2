<?php
include_once __DIR__ . '/../classes/Category.php';
include_once __DIR__ . '/../classes/ProductType.php';

$products = [
    new ProductType('Crocchette per cani', '35€/kg','https://arcaplanet.vtexassets.com/arquivos/ids/226747/trainer-natural-sensitive-cane-no-gluten-adult-mini-anatra.jpg?v=1775348274', new Category('Dogs'), 'Cibo per Cani', new DateTime('01/01/2023')),
    new ProductType('Crocchette per Gatti', '55€/kg','https://static.zoomalia.com/prod_img/39988/lm_305496e05e1aea0a9c4655800e8a7b9ea281669993809.jpg', new Category('Cats'), 'Cibo per Gatti', new DateTime('01/04/2023')),
    new ProductType('Collare per cane di piccola taglia', '15€','https://m.media-amazon.com/images/I/71E0rxzhvbL.jpg', new Category('Dogs'), 'Collari e Guinzagli', new DateTime('07/17/2023')),
    new ProductType('Sonaglio per gatti', '3€','https://www.epocaitalpigeon.com/11056-large_default/sonaglio-in-ottone-lucido-da-17-mm-per-cani-gatti-e-altri-amimali.jpg', new Category('Cats'), 'Collari e Guinzagli', new DateTime('01/01/2023')),
    new ProductType('Osso Dentasan', '2€/pz','https://m.media-amazon.com/images/I/61J+8ov8FBL._AC_UF894,1000_QL80_.jpg', new Category('Dogs'), 'Cibo per Cani', new DateTime('01/01/2023')),
    new ProductType('Tiragraffi', '70€','https://m.media-amazon.com/images/I/710wXOnm2yL._AC_UF894,1000_QL80_.jpg', new Category('Cats'), 'Cucce per gatti/Tiragraffi', new DateTime('01/01/2023')),
];



?>

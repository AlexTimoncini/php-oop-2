<?php
    include_once __DIR__ . '/db/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/style.css">
    <title>BoolVet - Home</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-around">
                <h2>
                    Our Products:
                </h2>
            <?php foreach ($products as $product) { ?>
                <div class="card col-3 p-0 m-3" >
                    <div class="availability <?php if($product->checkAvailability()){echo 'avaible';}else{echo 'unavaible';}; ?>"></div>
                    <div class="card-header">
                        <?php echo $product->category->name; ?> <br>
                        <?php echo $product->type; ?>
                    </div>
                    <img src="<?php echo $product->image ?>" class="card-img-top rounded-0 mt-2" alt="<?php echo $product->product; ?>">
                    <div class="card-body p-3">
                        <h5 class="card-title">
                            <?php echo $product->product; ?>
                        </h5>
                        <h6 class="card-subtitle pt-2">
                            <?php echo $product->price; ?>
                        </h6>
                        <p class="card-subtitle py-1">
                            <?php echo strval($product->quantity); ?>
                            pz remaning
                        </p>
                        <?php if($product instanceof Food){?>
                            <p class="card-subtitle py-1">
                                <?php echo $product->expiryDate->format('d-m-Y'); ?>
                            </p>
                        <?php }else if($product instanceof Collar){?>
                            <p class="card-subtitle py-1">
                                <?php echo $product->size; ?>
                            </p>
                        <?php }else if($product instanceof Kennel){?>
                            <p class="card-subtitle py-1">
                                <?php echo $product->material; ?>
                            </p>
                        <?php }?>
                        <p class="card-subtitle">
                            <?php echo $product->magazine; ?> - 
                            <?php echo $product->room; ?> - 
                            <?php echo $product->box; ?>
                        </p>
                        <a href="#" class="btn btn-primary">
                            Shop Now
                        </a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>
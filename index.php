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
                    <div class="card-header">
                        <?php echo $product->category->name; ?>
                    </div>
                    <img src="<?php echo $product->image ?>"  class="card-img-top rounded-0" alt="<?php echo $product->product; ?>">
                    <div class="card-body p-3">
                        <h5 class="card-title">
                            <?php echo $product->product; ?>
                        </h5>
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
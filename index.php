<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CDN Bootsrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <title>Prodotti per cani e gatti</title>
    </head>
    <body>
        <header>
            <h1 class="text-center">
                Prodotti per cani e gatti
            </h1>
        </header>
        <main>
            <div class="container">
                <?php 
                    require_once __DIR__ .'/classes/Product.php';
                    require_once __DIR__ .'/classes/Category.php';

                    foreach ($products as $product) {
                        //var_dump($product);
                ?>
                <div class="card mb-3" style="width: 18rem;">
                    <img src="<?php echo $product-> image?>" class="card-img-top" alt="<?php echo $product-> name?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $product -> name ?></h5>
                        <p class="card-text text-warning"><?php echo $product -> getPrice() ?></p>
                        <p class="card-text"><?php echo $product -> notes ?></p>
                        <p class="card-text"><strong><?php echo $product ->category-> name ?></strong></p>
                    </div>
                </div>
                <?php
                    } 
                ?>
            </div>
        </main>
    </body>
</html>
<?php require 'connection.php' ?>

<?php

    $view_query = "SELECT * FROM `products`";

    $view_prepare = $connection->prepare($view_query);
    $view_prepare->execute();

    $products = $view_prepare->fetchAll(PDO::FETCH_ASSOC);

    // print_r($products);




?>

<?php foreach( $products as $product ){ ?>

        <div class="card" style="width: 18rem;">
            <div class="card-body">
            <h5 class="card-title"><?= $product['prod_name'] ?></h5>
            <h6 class="card-subtitle mb-2 text-body-secondary"><?= $product['prod_price'] ?></h6>
            <p class="card-text"><?= $product['prod_description'] ?></p>
            <a href="card.php?id=<?= $product['id']  ?>" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
         </div>
        </div>

 <?php } ?>
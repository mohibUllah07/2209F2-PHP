<?php require 'connection.php' ?>

<?php


    $prodName = $_POST['prodName'];
    $prodDescription = $_POST['prodDescription'];
    $prodPrice = $_POST['prodPrice'];


    $products_insert_query = "INSERT INTO `products`(`prod_name`, `prod_description`, `prod_price`) VALUES (:prodName, :prodDesc, :prodPrice)";


    $products_prepare = $connection->prepare($products_insert_query);
    $products_prepare->bindParam(':prodName',$prodName);
    $products_prepare->bindParam(':prodDesc',$prodDescription);
    $products_prepare->bindParam(':prodPrice',$prodPrice);
    $products_prepare->execute();


?>
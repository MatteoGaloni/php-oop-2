<?php
require __DIR__ . "/models/Category.php";
require __DIR__ . "/models/Product.php";
require __DIR__ . "/models/Food.php";
require __DIR__ . "/models/Toy.php";
require __DIR__ . "/models/DogKennel.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Little-e-commerce</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <h1><?php var_dump($products) ?></h1>
                </div>
            </div>
        </div>

    </div>

</body>

</html>
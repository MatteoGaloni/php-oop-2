<?php
require __DIR__ . "/models/Category.php";
require __DIR__ . "/models/Product.php";
require __DIR__ . "/models/Food.php";
require __DIR__ . "/models/Toy.php";
require __DIR__ . "/models/DogKennel.php";

$prodottoGenerico = new Product(
    "Prodotto Generico",
    15.55,
    new Category("Per cani", "immagine del cane")
);

$prodottoCiboGatto = new Food(
    "Croccantini Dietetici",
    19.99,
    new Category("Per gatti", "immagine del gatto"),
    "Tipo cibo = Secco"
);
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
                    <h2><?php var_dump($prodottoGenerico) ?></h2>
                    <h2><?php var_dump($prodottoCiboGatto) ?></h2>
                </div>
            </div>
        </div>

    </div>

</body>

</html>
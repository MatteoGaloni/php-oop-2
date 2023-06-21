<?php
require __DIR__ . "/models/Category.php";
require __DIR__ . "/models/Product.php";
require __DIR__ . "/models/Food.php";
require __DIR__ . "/models/DogKennel.php";
require __DIR__ . "/models/Toy.php";

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
$prodottoCucciaCane = new DogKennel(
    "Cuccia",
    45.99,
    new Category("Per cani", "immagine del cane"),
    "Dimensione = XL"
);
$prodottoToyGatto = new Toy(
    "Tiragraffi",
    35.99,
    new Category("Per gatti", "immagine del gatto"),
    "Materiale = Velcro"
);

$prodotti = [$prodottoGenerico, $prodottoCiboGatto, $prodottoCucciaCane, $prodottoToyGatto]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Little-e-commerce</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product) { ?>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title"><?php echo $product->name ?></div>


                        </div>
                        <h2><?php var_dump($prodottoGenerico) ?></h2>
                        <h2><?php var_dump($prodottoCiboGatto) ?></h2>
                        <h2><?php var_dump($prodottoCucciaCane) ?></h2>
                        <h2><?php var_dump($prodottoToyGatto) ?></h2>
                    </div>
                </div>
            <?php } ?>
        </div>

    </div>

</body>

</html>
<?php
require_once __DIR__ . "/models/Category.php";
require_once __DIR__ . "/models/Product.php";
require_once __DIR__ . "/models/Food.php";
require_once __DIR__ . "/models/Dogkennel.php";
require_once __DIR__ . "/models/Toy.php";

$prodottoGenerico = new Product(
    "Prodotto Generico",
    false,
    new Category("Per cani", "<i class='fa-solid fa-cat'></i><i class='fa-solid fa-dog'></i>")
);
$prodottoGenerico->img = "https://st4.depositphotos.com/14953852/22772/v/600/depositphotos_227725020-stock-illustration-image-available-icon-flat-vector.jpg";



$prodottoCiboGatto = new Food(
    "Croccantini Dietetici",
    10.99,
    new Category("Per gatti", "<i class='fa-solid fa-cat'></i>"),
    "Tipo cibo = Secco"
);
$prodottoCiboGatto->img = "https://www.carrefour.it/on/demandware.static/-/Sites-carrefour-master-catalog-IT/default/dwd0f5c0f2/large/CROCCGATTOMANZOFEGVERDCRF-8012666033720-5.png";



$prodottoCucciaCane = new DogKennel(
    "Cuccia",
    45.99,
    new Category("Per cani", "<i class='fa-solid fa-dog'></i>"),
    "Dimensione = XL"
);
$prodottoCucciaCane->img = "https://croci.net/wp-content/uploads/2020/09/Cuccia_per_cani_Chalet.jpg";



$prodottoToyGatto = new Toy(
    "Tiragraffi",
    35.99,
    new Category("Per gatti", "<i class='fa-solid fa-cat'></i>"),
    "Materiale = Velcro"
);
$prodottoToyGatto->img = "https://m.media-amazon.com/images/I/61cuSl4ycyL.jpg";

$products = [$prodottoGenerico, $prodottoCiboGatto, $prodottoCucciaCane, $prodottoToyGatto];

$products[0]->setDescription();
$products[1]->setDescription("Si tratta di cibo per gatti");
$products[2]->setDescription("Si tratta di una cuccia per cani");
$products[3]->setDescription("Si tratta di un gioco per gatti");


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Little-e-commerce</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product) { ?>
                <div class="col-3">
                    <div class="card mt-4">
                        <div class="card-body">
                            <h5>Prodotto di tipo : <?php echo get_class($product) ?></h5>
                            <img class="card-img-top" src="<?php echo $product->img ?>" alt="ciao" />
                            <h3 class="card-title"><?php echo $product->getname() ?></h3>
                            <h3 class="card-title">
                                <?php try {
                                    echo $product->getprice();
                                } catch (Exception $e) {
                                    echo "C'è un errore";
                                }  ?>
                            </h3>
                            <h3 class="card-title"><?php echo $product->category->name ?></h3>
                            <h3><?php echo $product->category->icon  ?></h3>
                            <h3 class="card-title">
                                <?php
                                if (method_exists($product, 'getType')) {
                                    echo $product->getType();
                                } else if (method_exists($product, 'getMaterial')) {
                                    echo $product->getMaterial();
                                } else if (method_exists($product, 'getSize')) {
                                    echo $product->getSize();
                                } else {
                                    echo "<small> nothing to show </small>";
                                }
                                ?>
                            </h3>
                            <h3>Descrizione: <?php echo $product->getDescription() ?></h3>
                        </div>

                    </div>
                </div>
            <?php } ?>
        </div>


        <h1> <?php echo $prodottoCiboGatto->getType() ?></h1>
        <div class="card">
            <h2><?php var_dump($prodottoGenerico) ?></h2>
            <h2><?php var_dump($prodottoCiboGatto) ?></h2>
            <h2><?php var_dump($prodottoCucciaCane) ?></h2>
            <h2><?php var_dump($prodottoToyGatto) ?></h2>
        </div>
    </div>

</body>

</html>
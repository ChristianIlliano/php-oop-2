<?php

// require_once __DIR__ . "/models/categorie.php";
require_once __DIR__ . "/models/product.php";
require_once __DIR__ . "/models/cibo.php";
require_once __DIR__ . "/models/toys.php";
require_once __DIR__ . "/models/animal.php";

$animalCat = new Animal("gatto");
$animalCat->setIcon("fa-solid fa-cat");
// $product1->Animal = $Animal;
var_dump($animalCat);

$animalDog = new Animal("cane");
$animalDog->setIcon("fa-solid fa-dog");
var_dump($animalDog);

$catFood = new Cibo("GattoMarca", 80, 180, "20-01-2030");
$catFood->setImg("https://www.naturepetshop.it/wp-content/uploads/leonardo-fegato-400-gr-lattine.jpg");
$catFood->Animal = $animalCat;
// $catFood -> new Animal("gatto");
var_dump($catFood);
// $product2 = new Toys("ciotola", "cane", 17, 50, "blu");
// var_dump($product2);

$dogFood = new Cibo("gattopardo", 20, 10, "20-01-2085");
$dogFood->setImg("https://pyxis.nymag.com/v1/imgs/f55/980/f57a2f1d6de4cbf768e5f97fb39f69caa7-dog-food-106-final.1x.rsquare.w1400.jpg");
$dogFood->Animal = $animalDog;
var_dump($dogFood);


$dogBone = new Toys("Osso di gomma", 5, 5, "blue");
$dogBone->setImg("https://m.media-amazon.com/images/I/61NZu7+sMuL.jpg");
$dogBone->Animal = $animalDog;
var_dump($dogBone);


try {
    $catFood-> setPeso(50);
} catch(Exception $e) {
    echo "<br>Eccezzione: ". $e->getMessage();
}


$catalogue = [$catFood, $dogFood, $dogBone]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="contianer mt-5">
        <h2>Catalogo Prodotti per Cani e Gatti</h2>
        <div class="row ">
            <?php foreach ($catalogue as $product) { ?>
                <div class="col-4">
                    <div class="card">
                        <img src="<?php echo $product->getImg(); ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4><?php echo $product->getName(); ?> </h4>
                            <p><?php echo $product->getPrice(); ?>€</p>
                            <?php if (get_class($product) === "Cibo") { ?>
                                <p><?php echo $product->getPeso(); ?>kg</p>
                                <p><?php echo $product->getScadenza(); ?></p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>

</html>
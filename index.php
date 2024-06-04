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
// $product1->Animal = $Animal;
var_dump($animalDog);

$catFood = new Cibo("GattoMarca", 80, 18, "20-01-2030");
$catFood-> setImg("https://www.naturepetshop.it/wp-content/uploads/leonardo-fegato-400-gr-lattine.jpg");
$catFood->Animal = $animalCat;
// $catFood -> new Animal("gatto");
var_dump($catFood);
// $product2 = new Toys("ciotola", "cane", 17, 50, "blu");
// var_dump($product2);

$dogBone = new Toys("Osso di gomma", 5, 5, "blue");
var_dump($dogBone);
// $product2 = new catergorie("ciotola", "MyDog", 17, "dog");
// var_dump($product2);
?>
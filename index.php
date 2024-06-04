<?php

// require_once __DIR__ . "/models/categorie.php";
require_once __DIR__ . "/models/product.php";
require_once __DIR__ . "/models/cibo.php";
require_once __DIR__ . "/models/toys.php";

$product1 = new Cibo("ciotola", "cane", 17, 18, "20-01-2030");
var_dump($product1);

$product2 = new Toys("ciotola", "cane", 17, 50, "blu");
var_dump($product2);

// $product2 = new catergorie("ciotola", "MyDog", 17, "dog");
// var_dump($product2);
?>
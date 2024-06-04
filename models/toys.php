<?php

require_once __DIR__ . "/product.php";

class Toys extends Product {
    private int $durata;
    private string $colore;

public function __construct(string $_name, int $_price, int $_durata, string $_colore) {
    parent::__construct($_name, $_price);
    $this->colore = $_colore;
    $this->durata = $_durata;
}
}
?>
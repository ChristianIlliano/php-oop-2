<?php

require_once __DIR__ . "/product.php";

class Cibo extends Product {
    private int $peso;
    private string $scadenza;

public function __construct(string $_name, string $_categoria, int $_price, int $_peso, string $_scadenza) {
    parent::__construct($_name, $_categoria, $_price);
    $this->peso = $_peso;
    $this->scadenza = $_scadenza;
}
}
?>

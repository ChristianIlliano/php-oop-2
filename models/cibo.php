<?php

require_once __DIR__ . "/product.php";

class Cibo extends Product {
    private int $peso;
    private string $scadenza;

public function __construct(string $_name, int $_price, int $_peso, string $_scadenza) {
    parent::__construct($_name, $_price);
    $this->peso = $_peso;
    $this->scadenza = $_scadenza;
}

    /**
     * Get the value of peso
     */ 
    public function getPeso()
    {

        return $this->peso;
    }

    /**
     * Get the value of scadenza
     */ 
    public function getScadenza()
    {
        return $this->scadenza;
    }

    /**
     * Set the value of peso
     *
     * @return  self
     */ 
    public function setPeso(int $peso)
    {
        if (strtolower($peso) > 100 || strtolower($peso) < 0) {
            throw new Exception("peso errato");
        }

            $this->peso;
    }
}
?>

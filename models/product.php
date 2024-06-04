<?php

class Product {

    private string $name;
    public string $categoria;
    private int $price;
    

    public function __construct(string $_name, string $_categoria, int $_price)
    {
        $this->name = $_name;
        if (strtolower($_categoria) === "cane" || strtolower($_categoria) === "gatto") {
            $this->categoria = $_categoria;
        } else {
            throw new Exception("devi inserire cane o gatto");
        }
        $this->price = $_price;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    


    /**
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
    }

}
